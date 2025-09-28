<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function __invoke()
    {
        return 'User Information';
    }

    public function show(Request $request, User $user)
    {
        // $user = User::getData($id);
        // return "<ul> <li> Name: {$user->name} </li> <li> Email: {$user->email} </li> </ul>";

        // $user = DB::select("select * from users where id = $id");

        // select * from users where id = 1
        // $user = User::find($id);

        dd($user);

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
        $validatedForm = $request->validate([
            'email' => [
                'required',
                'string',
                'email',
            ],
            'password' => [
                'required',
                'string',
            ]
        ]);

        dd($validatedForm);
    }
}
