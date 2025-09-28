<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use App\Rules\LoginRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

        User::create($validatedForm);

        return redirect()->route('signin');
    }

    public function login(Request $request)
    {
        $validatedForm = $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'exists:users,email',
                new LoginRule
            ],
            'password' => [
                'required',
                'string',
            ]
        ], [
            'email.exists' => 'Invalid credentials'
        ]);

        $email = $validatedForm['email'];

        $user = User::whereEmail($email)->first();
        Auth::login($user);
        return redirect()->route('posts.index');

        // $password = $validatedForm['password'];

        // // option 1
        // if (Hash::check($password, $user->password)) {
        //     Auth::login($user);

        //     return redirect()->route('posts.index');
        // } else {
        //     return back()->withErrors([
        //         'email' => 'Invalid credentials'
        //     ])->withInput();
        // }

        // // option 2
        // if (Auth::attempt($validatedForm)) {
        //     Auth::login($user);

        //     return redirect()->route('posts.index');
        // } else {
        //     return back()->withErrors([
        //         'email' => 'Invalid credentials'
        //     ])->withInput();
        // }
    }
}
