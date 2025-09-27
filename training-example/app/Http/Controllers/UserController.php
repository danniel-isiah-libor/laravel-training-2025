<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function index (){
        return view ('forms.register');
    }

    public function store (RegisterRequest $request){
        $request->validated();
        dd($request->all());
    }
}
