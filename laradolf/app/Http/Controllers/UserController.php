<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

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
        $validatedForm = $request->validated();

        // Hash the password before returning the response
        $validatedForm['password'] = Hash::make($validatedForm['password']);

        // Remove password_confirmation from the response
        unset($validatedForm['password_confirmation']);

        // Debugging statement to trace execution
        logger('Signup method executed with data: ', $validatedForm);

        return response()->json([
            'message' => 'Signup successful',
            'data' => $validatedForm
        ]);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Debugging statement to trace execution
        logger('Login method executed with data: ', $validated);

        return response()->json([
            'message' => 'Login successful',
            'data' => $validated
        ]);
    }

    public function submitInterests(Request $request)
    {
        $validated = $request->validate([
            'interests' => 'required|array',
            'interests.*' => 'string',
        ]);

        $dummyInterests = User::getInterests();

        // Validate that all selected interests are in the dummy data
        foreach ($validated['interests'] as $interest) {
            if (!in_array($interest, $dummyInterests)) {
                return response()->json([
                    'message' => 'Invalid interest selected: ' . $interest,
                ], 422);
            }
        }

        return response()->json([
            'message' => 'Interests submitted successfully',
            'data' => $validated['interests']
        ]);
    }

}
