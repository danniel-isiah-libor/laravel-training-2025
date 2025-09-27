<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use App\Models\User; // Assuming you have a User model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegistrationController extends Controller
{

    public function __invoke(){

    }


    public function show(Request $request, $id = null) {

        $user = User::getData($id);
        //dd($user);
        return view('show', ['user'=> $user]);
        //return $user;
    }

public function store(Request $request) 
{
 $request->validate([
        'name'=> [
            'required',
            'string',
            'max:255',
        ],
        'email'=> [
            'required',
            'string',
            'email:dns,strict,spoof,filter,rfc',
            'max:255',
            'unique:users',
        ],
        'password'=> [
            'required',
            'string',
            Password::min(8)
            ->max(12)
            ->symbols()
            ->mixedCase()
            ->numbers()
        ]
    ]);

}

public function login(Request $request){
//
}


}


