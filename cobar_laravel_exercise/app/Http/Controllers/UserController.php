<?php
namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

            if (! $user) {
                abort(404, 'User not found.');
            }

            return view('users.view-profile', [
                'user' => $user,
                'id'   => $id,
            ]);

        } else {
            $users = User::all();

            return view('users.profile', [
                'users' => $users,
            ]);
        }

    }

    public function store(SignupRequest $request)
    {
        $validatedForm = $request->validated();

        User::create($validatedForm);

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $validatedForm = $request->validate([
            'email'    => [
                'required',
                'string',
                'email',
                'exists:users,email',
            ],
            'password' => [
                'required',
                'string',
            ],
        ], [
            'email.exists' => 'The email does not exist in our records.',
        ]);

        $email    = $validatedForm['email'];
        $password = $validatedForm['password'];

        $user = User::where('email', $email)->first();

        if (Hash::check($password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('admin/users/profile');
        } else {
            return back()->withErrors(['email' => 'Invalid Credentials'])->withInput();
        }

        dd($validatedForm);
    }
}
