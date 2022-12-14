<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class,'index']);
Route::get('/login', [HomeController::class,'login']);
Route::get('/check-email', [HomeController::class,'CheckEmail']);
Route::get('/forget-password', [HomeController::class,'ForgetPassword']);
Route::get('/password-reset', [HomeController::class,'PasswordReset']);
Route::get('/Set-a-new-password', [HomeController::class,'SetNewPassword']);
Route::get('/sign-up', [HomeController::class,'SignUp']);
Route::get('/about-us', [HomeController::class,'AboutUs']);
Route::get('/home-screen', [HomeController::class,'HomeScreen']);
Route::get('/buy-product', [HomeController::class,'BuyProduct']);
Route::get('/seller-profile', [HomeController::class,'SellerProfile']);
Route::get('/chart-screen', [HomeController::class,'ChartScreen']);
Route::get('/post-ads', [HomeController::class,'PostAds']);
Route::get('/message-screen', [HomeController::class,'MessageScreen']);
Route::get('/post-add', [HomeController::class,'PostAdd']);
Route::get('/promote-your-ad', [HomeController::class,'PromoteYourAd']);
Route::get('/user-profile', [HomeController::class,'UserProfile']);
Route::get('/contact-us', [HomeController::class,'ContactUs']);




