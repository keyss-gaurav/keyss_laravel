<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Users;

class Signup extends Controller
{
    //
    public function view(){
        return view('signup');
    }

  public function store(Request $request){
    echo "<pre>";
    print_r($request->all());

    if($request ->email !='' && $request ->password !=''){
        $users = new Users;
        $users->email = $request['email'];
        $users->password = md5($request['email']);
        $users->save();
    
        return redirect('/welcome');
    }
   
  }


}
