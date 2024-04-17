<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class login
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
            'email'=> 'required',
    
            ],
            [
                'password.required' => 'The password is required.',
                'password.min' => 'The password must be at least :min characters long.',
                'password.max' => 'The password must not exceed :max characters.',
                'password.regex' => 'The password must contain at least one lowercase letter and one uppercase letter.',
            ]
        );
            echo "<pre>";


        if($request ->email =='test@keyss.in' && $request ->password !='Aaaab1'){
            return redirect('/welcome');
        }
        return $next($request);
    }
}
