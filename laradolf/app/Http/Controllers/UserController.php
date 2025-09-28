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

    //public function show(Request $request, User $user){ shortcut for route model binding
    public function show(Request $request, $id = null){
        if ($id === 'all') {
            $users = User::paginate(10); // Paginate users with 10 per page
            return view('users.all', ['users' => $users]);
        }

        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return view('users.profile', ['user' => $user]);
    }

    public function showProfile(Request $request, $id = null)
    {
        $user = User::getData($id);
        return view('users.profile', ['user' => $user]);
    }

    public function store(SignupRequest $request) //form submission 
    {
        $validatedForm = $request->validated();

        // Check if passwords match
        if ($request->password !== $request->password_confirmation) {
            return back()->withErrors(['password' => 'Passwords do not match'])->withInput();
        }

        // Ensure user_group_id is 2
        // if ($request->user_group_id != 2) {
        //     return back()->withErrors(['user_group_id' => 'You are not authorized to sign up'])->withInput();
        // }

        // Hash the password before saving
        $validatedForm['password'] = Hash::make($validatedForm['password']);

        // Save the validated data into the database
        $user = User::create($validatedForm);

        return response()->json([
            'message' => 'Signup successful',
            'data' => $user
        ]);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        session(['user' => $user]);

        if ($user->user_group_id === 1) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.dashboard');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect()->route('admin.signin');
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

    public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return back()->withErrors(['message' => 'User not found']);
        }

        if (session('user')->id === $user->id && $user->user_group_id === 1) {
            return back()->withErrors(['message' => 'You cannot delete yourself as an admin']);
        }

        $user->delete();

        return redirect()->route('admin.users.profile', ['id' => 'all'])->with('success', 'User deleted successfully');
    }

    public function showPosts(Request $request)
    {
        $posts = \App\Models\Post::paginate(10); // Fetch posts with pagination
        return view('posts.index', ['posts' => $posts]);
    }

    public function showPost(Request $request, $id)
    {
        $post = \App\Models\Post::find($id); // Fetch the post by ID
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return view('posts.show', ['post' => $post]);
    }

    public function showAllPosts(Request $request)
    {
        $posts = \App\Models\Post::paginate(10); // Fetch posts with pagination
        return view('posts.all', ['posts' => $posts]);
    }
}
