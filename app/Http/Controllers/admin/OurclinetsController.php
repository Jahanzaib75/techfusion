<?php

namespace App\Http\Controllers\admin;
use App\Models\OurClient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OurclinetsController extends Controller
{
    public function index(){
        $record=OurClient::all();
        return view('admin.modules.ourclinets.index',compact('record'));
    }
    public function create(Request $request){
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if(is_numeric($updateId) && $updateId > 0) {
            $data['record'] = OurClient::where('id',$updateId)->first();
        }
        return view('admin.modules.ourclinets.create',compact('data'));
    }
    public function submit(Request $request) {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Page add successfully";
            $updateId = $request->id;
            $data = array("name" => $request->name, "company_name" =>$request->companyname, "designation" => $request->designation, "timespending" => $request->timespending, "image" => $request->image,);
            if(isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Page update successfully";
            }
            $response =OurClient::updateOrCreate(array('id'=>$updateId),$data);
            $updateId = $response->id;
            if (isset($_FILES['image']['size'])) {
                if ($_FILES['image']['size'] > 0) {
                    if (isset($response->image) && !empty($response->image)) {
                        $this->delete_images_by_name(ORIGNAL_IMAGE_PATH_CLIENTS,LARGE_IMAGE_PATH_CLIENTS,MEDIUM_IMAGE_PATH_CLIENTS,SMALL_IMAGE_PATH_CLIENTS, $response->image);
                    }
                    $this->upload_images(ORIGNAL_IMAGE_PATH_CLIENTS,LARGE_IMAGE_PATH_CLIENTS,MEDIUM_IMAGE_PATH_CLIENTS,SMALL_IMAGE_PATH_CLIENTS,$request->file('image'), $updateId, 'image','id', 'our_clients');

                }
            }
        }
        else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
}
