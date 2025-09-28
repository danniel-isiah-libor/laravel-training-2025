<?php
namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __invoke()
    {
        return 'User Information';
    }

    public function show(Request $request, $id = null)
    {

        if ($id) {
            $user = User::find($id);
            // dd($user);
            return view('users.profile', [
                'user'  => $user,
                'id'    => $id,
                'users' => [],
            ]);
        } else {
            $users = User::all();
            // dd($users);
            return view('users.profile', [
                'user'  => null,
                'id'    => null,
                'users' => $users,
            ]);
        }

        // return view('users.profile', compact('user', 'id'));
    }

    public function store(SignupRequest $request)
    {
        $validatedForm = $request->validated();

        dd($validatedForm);
    }

    public function login(Request $request)
    {
        $validatedForm = $request->validate([
            'email'    => [
                'required',
                'string',
                'email',
            ],
            'password' => [
                'required',
                'string',
            ],
        ]);

        dd($validatedForm);
    }
}
