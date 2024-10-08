<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploader;
use Illuminate\Http\Request;
use App\Rules\WebpageUniqueUrlSlug;
use App\Models\Webpages;
use Validator;

class WebpagesController extends Controller
{
    public function index(){
        $record = Webpages::get();
        return view('admin.modules.webpages.listing',compact('record'));
    }
    public function create(Request $request){
        $data['updateId'] = $updateId = ($request->id ?? 0);
        $record = null;
        if(is_numeric($updateId) && $updateId > 0) {
            $data['record'] = Webpages::where('id',$updateId)->first();
        }
        return view('admin.modules.webpages.form',compact('data'));
    }
    public function checkPageUrlSlug(Request $request) {
        $type = 'error';
        $message = "Title is taken";
        $pageTitle = $request->page_title;
        $pageId = (isset($request->id) && !empty($request->id) && is_numeric($request->id) && $request->id > 0 ? $request->id : 0);
        $record = null;
        if(!empty($pageTitle)) {
            $record = Webpages::where(array(["id","!=",$pageId],["url_slug",strtolower($pageTitle)]))->select('id')->first();
            if(!isset($record->id) || empty($record->id)) {
                $type = 'success';
                $message = "Title is available";
            }
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
    public function submitForm(Request $request) {
        // "website_title" => $request->website_title,
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'url_slug' => ['required',"max:150","min:1"],
            'page_title' => 'required|min:1|max:100',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Page add successfully";
            $updateId = $request->id;
            $data = array("page_title" => $request->page_title, "head_title" => $request->head_title, "meta_title" =>$request->meta_title, "meta_description" => $request->meta_description, "meta_keywords" => $request->meta_keywords, "short_description" => $request->short_description, "url_slug" => $request->url_slug, "page_content" => $request->page_content, "page_rank" => ($request->page_rank ?? 0));
            if(isset($updateId) && !empty($updateId) && $updateId > 0) {
                $data['id'] = $updateId;
                $message = "Page update successfully";
            }
            $response = Webpages::updateOrCreate(array("url_slug" => $request->url_slug),$data);
            $updateId = $response->id;
            if (isset($_FILES['icon']['size'])) {
                if ($_FILES['icon']['size'] > 0) {
                    if (isset($response->icon) && !empty($response->icon)) {
                        $this->delete_images_by_name(ORIGNAL_IMAGE_PATH_WEPAGES,LARGE_IMAGE_PATH_WEPAGES,MEDIUM_IMAGE_PATH_WEPAGES,SMALL_IMAGE_PATH_WEPAGES, $response->icon);
                    }
                    $this->upload_images(ORIGNAL_IMAGE_PATH_WEPAGES,LARGE_IMAGE_PATH_WEPAGES,MEDIUM_IMAGE_PATH_WEPAGES,SMALL_IMAGE_PATH_WEPAGES,$request->file('icon'), $updateId, 'icon','id', 'webpages');

                }
            }
        }
        else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
    public function update_webpage_status(Request $request){
       
        $userid = $request->id;
        $status = $request->status;
        if($status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
       
        Webpages::whereId($userid)->update(array('is_publish'=>$status));
    }
    public function destroy($id)
    {
        
        $delete = Webpages::findOrFail($id);
        $delete->delete();
    } 
}
