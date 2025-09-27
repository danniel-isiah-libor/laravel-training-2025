<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request, $id){
        $user = User::getData($id);

        dd($user['name']);


        return "<ul><li>{$user->name}</li></ul>";

    }
}
