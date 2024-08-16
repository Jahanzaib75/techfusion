<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\blog;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class OurblogController extends Controller
{
    public function index(){
        $record=blog::all();
        return view('admin.modules.blog.index',compact('record'));
    }
    public function create(Request $request){
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if(is_numeric($updateId) && $updateId > 0) {
            $data['record'] = blog::where('id',$updateId)->first();
        }
        return view('admin.modules.blog.create',compact('data'));
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
            $data = array("tittle" => $request->tittle, "detail" =>$request->detail, "image" => $request->image,);
            if(isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Page update successfully";
            }
            $response =blog::updateOrCreate(array('id'=>$updateId),$data);
            $updateId = $response->id;
            if (isset($_FILES['image']['size'])) {
                if ($_FILES['image']['size'] > 0) {
                    if (isset($response->image) && !empty($response->image)) {
                        $this->delete_images_by_name(ORIGNAL_IMAGE_PATH_BLOG,LARGE_IMAGE_PATH_BLOG,MEDIUM_IMAGE_PATH_BLOG,SMALL_IMAGE_PATH_BLOG, $response->image);
                    }
                    $this->upload_images(ORIGNAL_IMAGE_PATH_BLOG,LARGE_IMAGE_PATH_BLOG,MEDIUM_IMAGE_PATH_BLOG,SMALL_IMAGE_PATH_BLOG,$request->file('image'), $updateId, 'image','id', 'blogs');

                }
            }
        }
        else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
    public function destroy($id)
    {      
        $delete = blog::findOrFail($id);
        $oldimage=$this->delete_images_by_name(ORIGNAL_IMAGE_PATH_BLOG,LARGE_IMAGE_PATH_BLOG,MEDIUM_IMAGE_PATH_BLOG,SMALL_IMAGE_PATH_BLOG,$delete->image);
        if(File::exists($oldimage)) {
            File::delete($oldimage);
         }
        $delete->delete();
    } 
}
