<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index (){
        return view('forms.login');
    }

    public function store (LoginRequest $request){
        $validated = $request->validated();

        $user = User::whereEmail($validated['email'])->first();
        
        if(Auth::attempt($validated)){
            Auth::login($user);

            return redirect()->route('post.index');
        }else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }
}
