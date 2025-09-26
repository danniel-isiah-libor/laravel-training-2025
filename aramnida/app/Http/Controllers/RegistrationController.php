<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    // public function __invoke(){

    // }
    public function show(Request $request, $id = null) {

        $user = User::getData($id);
         return $user;
    }


}
