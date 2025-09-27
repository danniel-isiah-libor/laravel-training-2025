<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function __invoke()
    {
        return 'User Information';
    }

    public function show(Request $request, $id = null)
    {
        $user = User::getData($id);
        // return "<ul> <li> Name: {$user->name} </li> <li> Email: {$user->email} </li> </ul>";
        return view('users.profile', [
            'user' => $user
        ]);
    }

    public function store(SignupRequest $request)
    {
        $validatedForm = $request->validated();

        dd($validatedForm);
    }

    public function login(Request $request)
    {
        //
    }
}
