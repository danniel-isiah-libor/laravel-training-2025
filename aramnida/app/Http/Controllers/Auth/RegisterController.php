<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;
//use App\Models\User; // Assuming you have a User model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{

    public function __invoke(){

    }


    public function show(Request $request, $id = null) {

        $user = User::getData($id);
        //dd($user);
        return view('show', ['user'=> $user]);
        //return $user;
    }


    public function check_interest(Request $request) 
    {
        $selectedItems = $request->input('interest');

        $checkinterests = User::getInterest($selectedItems);

        
        //dd($checkinterests);
        return view('interests', ['checkinterests'=> $checkinterests]);


    // $interests = [
    //     'Laravel' => 'Laravel',
    //     'Vue' => 'Vue',
    //     'React' => 'React',
    //     'Angular' => 'Angular',
    // ];    

    }



    public function store(SignUpRequest $request) 
    {
        $validatedForm = $request->validated();

        $user = User::create($validatedForm);
        Auth::login($user);
        return to_route('post.index');
    }

    public function login(LoginRequest $request){

        $validatedForm = $request->validated();

            dd($validatedForm);
    }

}