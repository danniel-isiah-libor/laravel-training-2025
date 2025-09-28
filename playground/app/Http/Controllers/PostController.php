<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

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

        dd($validatedForm);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    public function listing()
    {
        //
    }
}
