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


public function BuyProduct(){
    return view('frontend.buy_product');
}

public function  SellerProfile(){
    return view('frontend.seller_profile');
}
public function   ChartScreen(){
    return view('frontend.chart_screen');
}
public function   PostAds(){
    return view('frontend.post_ads');
}
public function    MessageScreen(){
    return view('frontend.message_screen');
}




public function PostAdd(){
    return view('frontend.post_add');
}

public function PromoteYourAd(){
    return view('frontend.promote_your_ad');
}

public function UserProfile(){
    return view('frontend.user_profile');
}


}
