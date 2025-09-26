<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(){
        return response()->json("User");
    }
    public function show(Request $request, $id){
        $data = User::getData($id);
        return view('home', ['data'=>$data]);
    }
}
