<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Otp_login extends Controller
{
    //
    public function view(){
        return view('otp_login');
    }

    public function post(){
        return view('otp');

    }
    public function view_otp(){
        return view('otp');
    }

    public function post_otp(){
        return view('otp');

    }
}
