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
        $user = User::getData($id);

        return view('users.profile', compact('user', 'id'));
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
