<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\Subscription;
use App\Models\qoute;
use App\Models\Webpages;
use App\Models\HomeContent;
use App\Models\Specialites;
use App\Models\Setting;
use App\Models\Savemony;
use App\Models\Testimonial;
use App\Models\OurClient;
use App\Models\OurTeam;
use App\Models\blog;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class FrontController extends Controller
{
    public function index() {
        $testimonial=Testimonial::all();
        // $setting=Setting::all();
        // $specialites=Specialites::all();
        // $content=HomeContent::all();
        // $savemony=Savemony::all();
        $clinets=OurClient::all();
        $teams=OurTeam::all();
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        // $ranks = Webpages::orderBy('page_rank', 'DESC')->get();
        return view('Front.Pages.index',compact('data','clinets','teams','testimonial', 'meta'));
    }
    public function ourStory() {
        $teams=OurTeam::all();
        $header = array('zIndex'=>'yes');
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        return view('Front.Pages.aboutus',compact('header','data','teams', 'meta'));
    }
    public function blog() {
        $header = array('zIndex'=>'yes');
        $record = Blog::all();
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        return view('Front.Pages.blog',compact('header', 'data','record', 'meta'));
    }
    public function blogDetail(Request $req,$id) {
        $record=Blog::where("id", "=" ,$id)->first();
        $header = array('zIndex'=>'yes');
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        return view('Front.Pages.blogDetails',compact('header', 'data','record', 'meta'));
    }
    public function contactUs() {
        $header = array('zIndex'=>'yes');
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        return view('Front.Pages.contactus',compact('header', 'data', 'meta'));
    }
    public function faq() {
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $header = array('zIndex'=>'yes');
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        return view('Front.Pages.faq',compact('header','data', 'meta'));
    }
    public function privacypolicy() {
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $header = array('zIndex'=>'yes');
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        return view('Front.Pages.privacypolicy',compact('header','data', 'meta'));
    }
    public function termsAndConditions() {
        $meta = Webpages::Where("page_title", "=", "home")->first();
        $header = array('zIndex'=>'yes');
        $data=Webpages::where("is_publish", "=", 1)->orderBy('page_rank','asc')->get();
        return view('Front.Pages.termsandconditions',compact('header','data', 'meta'));
    }
    public function submitContactUS(Request $request) {
        
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'firstname' => "required|min:1|max:100",
            'lastname' => "required|min:1|max:100",
            'phonenumber' => "required|min:1|max:100",
            'email' => 'required|min:1|max:500|email',
            'description' => 'required|min:1|max:1000',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "The support team will contact you soon";
            $data = array("fname" => $request->firstname, "lname" =>($request->lastname ?? null), "email" => $request->email, "phonenumber" => $request->phonenumber, "message" => $request->description);
            ContactUs::updateOrCreate(array("email" => $data["email"]),$data);
            $email_data = array(
                'email' => "contact@binofapp.com",
                'data'  => $data,
            );
            $response = Mail::send('Front.Pages.Email.contact-us-email', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'])->subject('Contact Us')->from($email_data["data"]["email"], $email_data['data']['fname'].(isset($email_data['data']['lname']) && !empty($email_data['data']['lname']) ? ' '.$email_data['data']['lname'] : ''));
            });
            if (Mail::failures()) {
                $type = 'error';
                $message = "Unknonw error occur";
            }
        }
        else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
    public function submitSubsription(Request $request) {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'subscriptionEmail' => 'required|min:1|max:500|email',
        ]);
        if ($validator->passes()) {
            $type = 'success';
            $message = "Thank you for subscription";
            $data = array("email" => $request->subscriptionEmail);
            Subscription::updateOrCreate(array("email" => $data["email"]),$data);
            $email_data = array( 'email' => "contact@binofapp.com", 'data'  => $data);
            $response = Mail::send('Front.Pages.Email.subscription', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'])->subject('TechFusionPro Subscription')->from($email_data["data"]["email"], "Subscribe Email");
            });
            if (Mail::failures()) {
                $type = 'error';
                $message = "Unknonw error occur";
            }
        }
        else {
            $type = 'error';
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
    //////submit qoute email///////
    public function submitqoute(Request $request) {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'email' => 'required|min:1|max:500|email',
            'contact'=>'required',
        ]);
     
        if ($validator->passes()) {
            $type = 'success';
            $message = "Thank you for Considering Hirepro";
            $data = array("email" => $request->email,"detail"=>$request->detail,'firstname'=>$request->firstname,"lastname"=>$request->lastname,"contact"=>$request->contact);
            qoute::updateOrCreate(array("email" => $data["email"],"detail"=>$data["detail"],"firstname"=>$data["firstname"],"lastname"=>$data["lastname"],"contact"=>$data["contact"]));
            $email_data = array( 'email' => "rizwan.13347@gmail.com", 'data'  => $data);
            $response = Mail::send('Front.Pages.Email.qoute', $email_data, function ($message) use ($email_data) {
                $message->to($email_data['email'])->subject('TechFusionPro qoute message')->from($email_data["data"]["email"], "Qoute Email");
            });
            if (Mail::failures()) {
                $type = 'error';
                $message = "Unknonw error occur";
            }
        }
        else {
            
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
}
