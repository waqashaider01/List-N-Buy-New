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
<<<<<<< HEAD
Route::get('/About_us', [HomeController::class,'AboutUs']);
Route::get('/About', [HomeController::class,'Abouts']);
=======
Route::get('/about-us', [HomeController::class,'AboutUs']);
>>>>>>> 10704937f3c940a7588ca458bb105a576e3e922b

