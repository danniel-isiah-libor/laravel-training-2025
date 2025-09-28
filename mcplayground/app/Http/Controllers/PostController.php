<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }
    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return redirect()->route('feed');
    }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Post $post)
    {
        $post->update();
        return redirect()->route('feed');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('feed');
    }
    public function viewFeed()
    {
        $user = User::with([
            'posts' => function ($query) {
                $query->where('is_published', true);
            }
        ])
            ->where('id', 2)
            ->first();
        $posts = Post::orderBy('updated_at', 'DESC')->paginate();
        return view('posts.feed', [
            'posts' => $posts,
        ]);
    }
}
