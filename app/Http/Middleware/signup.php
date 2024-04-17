<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Signup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:4', 'max:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])/'],
        ],
        [
            'password.required' => 'The password is required.',
            'password.min' => 'The password must be at least :min characters long.',
            'password.max' => 'The password must not exceed :max characters.',
            'password.regex' => 'The password must contain at least one lowercase letter and one uppercase letter.',
            'email.unique' => 'The email has already been taken.',
        ]);

        // Your custom logic here

        return $next($request);
    }
}
