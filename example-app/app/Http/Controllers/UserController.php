<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // public function index(){

    //     $user = User::getData();


    //     return view('user.profile', ['users' => $user]);
    // }

    public function show(Request $request, $id){
        $user = User::getData($id);

        return view('users.profile', ['user' => $user]);

    }

    public function edit(){

    }

    public function update(Request $request, $id){}


    public function destroy(Request $request, $id){}
}
