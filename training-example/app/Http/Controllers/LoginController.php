<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index (){
        return view('forms.login');
    }

    public function store (LoginRequest $request){
        $request->validated();
        dd($request->all());
    }
}
