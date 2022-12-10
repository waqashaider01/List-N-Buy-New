<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index(){
    return view('frontend.index');
}


public function login(){
    return view('frontend.login');
}

public function CheckEmail(){
    return view('frontend.checkemail');
}
public function ForgetPassword(){
    return view('frontend.forgetpassword');
}
public function PasswordReset(){
    return view('frontend.password_reset');
}
public function SetNewPassword(){
    return view('frontend.set_new_password');
}
public function SignUp(){
    return view('frontend.signup');
}

public function HomeScreen(){
    return view('frontend.home_screen');
}

public function AboutUs(){
    return view('frontend.About_us');
}



}