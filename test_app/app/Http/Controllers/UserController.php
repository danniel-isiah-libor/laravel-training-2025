<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request, $id = null)
    {
        $user = User::getData($id);

        return "<ul>
            <li>Name: $user->name</li>
            <li>Email: $user->email</li>
        </ul>";
    }
}
