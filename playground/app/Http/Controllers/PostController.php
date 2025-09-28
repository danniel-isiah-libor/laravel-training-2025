<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        // $user = User::find(1);

        // dd($user);

        //

        // $posts = Post::all();

        // foreach ($posts as $post) {
        //     dump($post->user->email);
        // }

        // $user = User::with(
        //     [
        //         'posts' => function ($query) {
        //             $query->where('is_published', true);
        //         }
        //     ]
        // )
        //     ->where('id', 1)
        //     // ->orWhere()
        //     // ->orWhereHas()
        //     // ->doesntHave()
        //     // ->orDoesntHave()
        //     ->whereHas('posts', function ($query) {
        //         // $query->where('is_published', true);
        //         $query->whereIsPublished(true);
        //     })
        //     ->where(function ($query) {
        //         $query->where('email_verified', false);
        //     })
        //     ->toSql();

        // dd($user);

        $posts = Post::paginate(3); // simplePaginate(3)

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validatedForm = $request->validated();

        // option 1
        Post::create($validatedForm);

        return redirect()->route('posts.index');

        // option 2
        // $post = new Post();
        // $post->user_id = $validatedForm['user_id'];
        // $post->title = $validatedForm['title'];
        // $post->body = $validatedForm['body'];
        // $post->save();

        // option 3
        // Post::insert([
        //     [
        //         'title' => $validatedForm['title'],
        //         'body' => $validatedForm['body'],
        //         'user_id' => $validatedForm['user_id'],
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'title' => 'Second Post',
        //         'body' => 'This is the body of the second post.',
        //         'user_id' => $validatedForm['user_id'],
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $validatedForm = $request->validated();

        $post->update($validatedForm);

        // Post::where('id', 1)->update($validatedForm);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

    public function listing()
    {
        //
    }
}
