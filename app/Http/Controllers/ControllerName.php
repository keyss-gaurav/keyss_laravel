<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerName extends Controller
{
    //
    public function index(){
        return view('start');
    }

    public function resister(Request $request){

        // $request->validate([
        // 'email'=> 'required|email',
        // 'password'=> 'required|min:4|max:8|regex:/^(?=.*[a-z])(?=.*[A-Z])/',
        // 'email'=> 'required',

        // ],
        // [
        //     'password.required' => 'The password is required.',
        //     'password.min' => 'The password must be at least :min characters long.',
        //     'password.max' => 'The password must not exceed :max characters.',
        //     'password.regex' => 'The password must contain at least one lowercase letter and one uppercase letter.',
        // ]
   // );
      //  echo "<pre>";
        return redirect('/fail');
        print_r($request->all());
               

    }
}
