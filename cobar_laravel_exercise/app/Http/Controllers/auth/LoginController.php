<?php
namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginPage()
    {
        return view('auth.login-page');
    }
}
