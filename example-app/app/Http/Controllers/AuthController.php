<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(SignUpRequest $request)
    {

        $validated = $request->validated();

        $user = User::create($validated);

        Auth::login($user);

        return to_route('dashboard');
    }

    public function login(LoginRequest $request)
    {

        $validated = $request->validated();

        if(Auth::attempt(['email'=> $validated['email'],'password'=> $validated['password']])){
            return to_route('dashboard');
        }

        return to_route('login')->with('message', 'Incorrect Username or Password');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
