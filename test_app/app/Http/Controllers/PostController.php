<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $user = User::with(
        //     [
        //         'posts'
        //          => function ($query) {
        //             $query->where('is_published', true);
        //         }
        //     ]
        //     )->where('id', 2)
        //     ->whereHas('posts', function ($query) {
        //         $query->where('is_published', true);
        //     })->toSql();

        $posts = Post::with(['user'])->orderBy('updated_at', 'desc')->paginate();

        return view('pages.posts.index', compact('posts'));
    }

    public function create() 
    {
        return view('pages.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', 'Post successfully saved.');
    }

    public function edit(Post $post)
    {
        return view('pages.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([   
            'title' => [
                'required',
                'string',
                'max:255'
            ],
            'body' => [
                'required',
                'string',
                'max:3000'
            ]
        ]);



        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');

    }

    public function show()
    {
        // 
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post was successfully deleted.');
    }
}
