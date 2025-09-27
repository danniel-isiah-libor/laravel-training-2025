<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{SignInRequest, SignUpRequest};
use App\Models\User;
class UserController extends Controller
{
    //
    public function show (Request $request, $id=null){
        $result = User::getData($id);
        return view('users.profile', ['user' => $result]);
    }

    public function store(SignUpRequest $request){

        $validatedForm = $request->validated();
        return response()->json($validatedForm);

    }

    public function login(SignInRequest $request){
        //
        $loginCredentials = $request->validated();
        dd($loginCredentials);
    }

}
