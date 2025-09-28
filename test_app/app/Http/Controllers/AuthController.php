<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup() 
    {
        return view('auth.sign-up');
    }

    public function signin()
    {
        return view('auth.sign-in');
    }

    public function login(Request $request)
    {
        // Validate the input
        $credentials = $request->validate([
            'email' => [
                'required',
                'email',
                'string',
                'exists:users,email'
            ],
            'password' => [
                'required',
                'string'
            ]
                
        ]);

        // Attempt to log in
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Regenerate session for security
            $request->session()->regenerate();

            // Redirect to intended page or home
            return redirect()->intended('/admin/dashboard')->with('success', 'Welcome back!');
        }

        // If login fails, redirect back with error
        return back()
            ->withErrors(['email' => 'The provided credentials do not match our records.'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/sign-in')->with('success', 'You have been logged out.');
    }
}
