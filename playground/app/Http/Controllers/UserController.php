<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function index() {

     }
    public function show(Request $request, User $user) {
    // public function show(Request $request, $id=null) {

        // $user = User::getData($id);

        // $user = DB::select("select * from users where id = $id");

        //first() limit 1
        //get() array
        //$user[0]->name
        //select('*') '=' optional

        // $user = User::select('*')->where('id', '=', $id)->first();

        //$user = User::find($id);
        // $user = User::all();

        //$user = User::get();
        dd ($user);

        return view('users.profile',[
            'user' => $user
        ]);


    }

    public function store(SignupRequest $request)
    {
        $validatedForm = $request->validated();

        // dd($validatedForm);

        User::create($validatedForm);

        return redirect()->route('sign-in');
    }

    public function login(SignInRequest $request)
    {
        $login = $request->validated();

        //dd($login);

        $email = $login['email'];
        $pass = $login['password'];

        $user = User::whereEmail($email)->firstOrFail();

        // if (Hash::check($pass, $user->password)) {
        //     Auth::login($user);

        //     return redirect()->route('posts.index');
        // } else {
        //     return back()->withErrors({

        //     })
        // }

        // if (Auth::attempt)

    }
}
