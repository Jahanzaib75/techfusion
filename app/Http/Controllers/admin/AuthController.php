<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    public function login(){
        return view('admin.modules.guest.login');
    }
    public function submitLogin(Request $request) {
        $type = 'error';
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|min:4',
            'password' => 'required|min:8',
        ]);
        if ($validator->passes()) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $type = 'success';
                $message = "User login successfully";
            }
            else
                $message = "Invalid Email/Password";
        }
        else {
            $message = $validator->errors()->toArray();
        }
        return response()->json(['type'=>$type,'message'=>$message]);
    }
}
