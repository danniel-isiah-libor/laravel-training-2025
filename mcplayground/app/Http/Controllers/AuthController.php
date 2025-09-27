<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(SignupRequest $request) {}
    public function login(Request $request)
    {
        // return view('user.login');
    }
}
