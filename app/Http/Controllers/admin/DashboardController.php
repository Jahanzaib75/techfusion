<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\OurClient;
use App\Models\qoute;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Session;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = User::count();
            $qoute = qoute::count();
            $sub = Subscription::count();
            $clients = OurClient::count();
            return view('admin.modules.dashboard.index', compact('user','qoute','sub','clients'));
        }
        return redirect()->route('admin:login')->with("You are not allowed to access");
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('admin:login')->with('success',"Logout Successfully!");
    }
}
