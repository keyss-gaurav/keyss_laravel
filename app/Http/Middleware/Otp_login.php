<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Otp_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'The Email is required.',
            'email.email' => 'The input must be a valid email address format.',
        ]);
        
            echo "<pre>";


       
           
        return $next($request);
    }
}
