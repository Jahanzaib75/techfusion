<?php

namespace App\Http\Controllers\admin;
use App\Models\Ourteam;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class OurteamController extends Controller
{
    public function index(){
        $record=Ourteam::all();
        return view('admin.modules.ourteam.index',compact('record'));
    }
    public function create(Request $request){
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if(is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Ourteam::where('id',$updateId)->first();
        }
        return view('admin.modules.ourteam.create',compact('data'));
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
            $data = array("name" => $request->name, "desigination" =>$request->desigination,  "image" => $request->image,);
            if(isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Page update successfully";
            }
            $response =Ourteam::updateOrCreate(array('id'=>$updateId),$data);
            $updateId = $response->id;
            if (isset($_FILES['image']['size'])) {
                if ($_FILES['image']['size'] > 0) {
                    if (isset($response->image) && !empty($response->image)) {
                        $this->delete_images_by_name(ORIGNAL_IMAGE_PATH_TEAM,LARGE_IMAGE_PATH_TEAM,MEDIUM_IMAGE_PATH_TEAM,SMALL_IMAGE_PATH_TEAM, $response->image);
                    }
                    $this->upload_images(ORIGNAL_IMAGE_PATH_TEAM,LARGE_IMAGE_PATH_TEAM,MEDIUM_IMAGE_PATH_TEAM,SMALL_IMAGE_PATH_TEAM,$request->file('image'), $updateId, 'image','id', 'ourteams');

                }
            }
        }
        else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
}
