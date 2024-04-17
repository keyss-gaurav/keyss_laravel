<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class pass_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:4|max:8|regex:/^(?=.*[a-z])(?=.*[A-Z])/',
    
            ],
            [
                'password.required' => 'The password is required.',
                'password.min' => 'The password must be at least :min characters long.',
                'password.max' => 'The password must not exceed :max characters.',
                'password.regex' => 'The password must contain at least one lowercase letter and one uppercase letter.',
            ],
            [
            'email.required' => 'The Email is required.',
            'email.email' => 'The input must be a valid email address format.',

            ]
        );
            echo "<pre>";


       
            return redirect('/welcome');
        
        return $next($request);
    }
}
