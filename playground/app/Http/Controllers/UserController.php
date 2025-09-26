<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        return 'User Information';
    }

    public function show(Request $request, $id = null)
    {
        $user = User::getData($id);

        return 'User Profile';
    }
}
