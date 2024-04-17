<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerName;
use App\Http\Controllers\Otp_login;
use App\Http\Controllers\Pass_login;


use App\Http\Controllers\Signup;
use App\Http\Middleware\pass_login as MiddlewarePass_login;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/welcome', function () {
//     return view('start');
// });

Route::get('/admin', function () {
    return view('admin.dashboard');
});

// Route::get('/signup', function () {
//     return view('signup');
// });
// Route::post('/signup', function () {
//     return view('login');
// });
Route::get('/',[ControllerName::class,'index']);
Route::get('/login_pass',[Pass_login::class,'view']);
Route::get('/login_otp',[Otp_login::class,'view']);
Route::post('/login_otp',[Otp_login::class,'post'])->middleware('otp_login');
Route::post('/login_pass',[Pass_login::class,'post'])->middleware('pass_login');
Route::get('/otp',[Otp_login::class,'view_otp']);
Route::post('/otp',[Otp_login::class,'post_otp']);






Route::post('/',[ControllerName::class,'resister'])->Middleware('login');
Route::get('/signup',[Signup::class,'view']);
Route::post('/signup',[Signup::class,'store'])->middleware('signup');
