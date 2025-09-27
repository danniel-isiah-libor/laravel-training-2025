<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function show (Request $request, $id=null){
        $result = User::getData($id);
        $show = "Name: {$result->name}<br> Email: {$result->email}";
        return $show;
    }


}
