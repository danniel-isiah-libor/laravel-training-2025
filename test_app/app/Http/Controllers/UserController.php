<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function show(Request $request, User $user)
    {
        // $user = User::getData($id);

        return view('users.profile', compact('user'));
    }

    public function store(StoreUserRequest $request)
    {   

        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('admin.dashboard')->with('success', "Welcome to my Project," . ' ' . auth()->user()->name );
    }
}
