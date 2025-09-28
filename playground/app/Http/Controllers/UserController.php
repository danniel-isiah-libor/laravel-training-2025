<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, DB, Hash};
use App\Http\Requests\{SignInRequest, SignUpRequest};
use App\Models\User;

class UserController extends Controller
{
    //
    public function show (Request $request, User $user){
        // $result = User::getData($id);

        // $user = DB::select("select * from users where id=$id");
        // $user = User::select('*')->where('id','=',$id)->get();
        // $user = User::find($id);
        return response()->json($user);
        // return view('users.profile', ['user' => $user]);

    }

    public function store(SignUpRequest $request){

        $validatedForm = $request->validated();
        $hashedPassword = Hash::make($validatedForm['password']);


        $user = User::create([
            'name' => $validatedForm['name'],
            'email' => $validatedForm['email'],
            'password' => $hashedPassword,
        ]);
        return redirect()->route('user.login');

    }

    public function login(SignInRequest $request){
        //
        $loginCredentials = $request->validated();

        $email = $loginCredentials['email'];
        $password = $loginCredentials['password'];

        $user = User::whereEmail($email)->firstOrFail();

        if(Hash::check($password, $user->password)){
            // store the user in session
            Auth::login($user);

            return redirect()->route('posts.index');
        }
        else{
            return back()->withErrors([
                'email' => 'Invalid Credentials'
            ]);
        }


    }

}
