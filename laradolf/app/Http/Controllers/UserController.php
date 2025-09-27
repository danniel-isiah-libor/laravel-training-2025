<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;

class UserController extends Controller
{
    public function __invoke(){
        return 'User Information';
    }


    public function show(Request $request, $id = null){
        // If $id is 'all' or not numeric, show all users in a view
        if ($id === null || $id === 'all' || !is_numeric($id)) {
            $users = User::getData(null);
            return view('users.all', ['users' => $users]);
        }

        $user = User::getData($id);
        if (!$user) {
            return view('users.all', ['users' => []]);
        }
        $userObj = (object) $user;
        return view('profile', ['user' => $userObj]);
    }

    public function showProfile(Request $request, $id = null)
    {
        $user = User::getData($id);
        return view('users.profile', ['user' => $user]);
    }

    public function store(SignupRequest $request)
    {
        $request->validated();
    }

    public function login(Request $request)
    {

    }

}
