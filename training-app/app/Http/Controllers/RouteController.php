<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interests;
class RouteController extends Controller
{
    public function signupredirect(Request $request){

        return view('SignUpPage');

    }

    public function signinredirect(Request $request){

        return view('SignInPage');

    }

    public function show(Request $request){

        $data = Interests::all();

        return view('interests');

    }

}
