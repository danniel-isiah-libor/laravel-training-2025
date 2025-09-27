<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use Illuminate\Http\Request;
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
        dd($validatedForm);

    }


}
