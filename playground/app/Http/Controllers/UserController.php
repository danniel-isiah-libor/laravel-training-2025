<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    // public function show() {
    //     return 'User Profile';
    // }

    public function show(Request $request, $id=null) {

        $user = User::getData($id);

        return view('users.profile',[
            'user' => $user
        ]);


    }

    public function store(SignupRequest $request)
    {
        $validatedForm = $request->validated();

        dd($validatedForm);
    }

    public function login(SignInRequest $request)
    {
        $login = $request->validated();

        dd($login);

    }
}
