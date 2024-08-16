<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index(){
        $record=Testimonial::all();
        return view('admin.modules.testimonial.index',compact('record'));
    }
    public function create(Request $request){
        $data = null;
        $data['updateId'] = $updateId = ($request->id ?? 0);
        if(is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Testimonial::where('id',$updateId)->first();
        }
        return view('admin.modules.testimonial.create',compact('data'));
    }
    public function submit(Request $request) {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'name' => 'required',"max:150","min:1",
            'companyname' => 'required|min:1|max:100',
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
            $response = Testimonial::updateOrCreate(array('id'=>$updateId),$data);
            $updateId = $response->id;
            if (isset($_FILES['image']['size'])) {
                if ($_FILES['image']['size'] > 0) {
                    if (isset($response->image) && !empty($response->image)) {
                        $this->delete_images_by_name(ORIGNAL_IMAGE_PATH_TESTIMONIAL,LARGE_IMAGE_PATH_TESTIMONIAL,MEDIUM_IMAGE_PATH_TESTIMONIAL,SMALL_IMAGE_PATH_TESTIMONIAL, $response->image);
                    }
                    $this->upload_images(ORIGNAL_IMAGE_PATH_TESTIMONIAL,LARGE_IMAGE_PATH_TESTIMONIAL,MEDIUM_IMAGE_PATH_TESTIMONIAL,SMALL_IMAGE_PATH_TESTIMONIAL,$request->file('image'), $updateId, 'image','id', 'testimonials');

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
        $delete = Testimonial::findOrFail($id);
        $oldimage=$this->delete_images_by_name(ORIGNAL_IMAGE_PATH_TESTIMONIAL,LARGE_IMAGE_PATH_TESTIMONIAL,MEDIUM_IMAGE_PATH_TESTIMONIAL,SMALL_IMAGE_PATH_TESTIMONIAL,$delete->image);
        if(File::exists($oldimage)) {
            File::delete($oldimage);
         }
        $delete->delete();
    } 
}
