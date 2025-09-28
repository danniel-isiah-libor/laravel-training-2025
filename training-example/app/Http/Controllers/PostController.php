<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function index(){

        $posts = Post::with(['user'])->paginate(10);

        $user = User::with([
            'posts' => function ($query){
                $query->where('is_published', true);
            }
        ])
        ->where('id', 1)
        ->whereHas('posts', function ($query){
            $query->where('is_published', true);
        })
        ->first();



        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }

    public function store(PostRequest $request){
        $request->validated();
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1,
            'is_published' => true
        ]);

        return redirect()->route('post.index');
    }

    public function create(){
        return view('post.create');
    }

    public function edit(Post $post){
        $post = Post::with(['user'])->where('id', $post->id)->first();
        return view('post.edit', compact('post'));
    }

    public function update(UpdatePostRequest $request, Post $post){
        // dump($post->id);
        $request->validated();
        // dd($request->all());
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
            'is_published' => $request->is_published ? true : false
        ]);
        return redirect()->route('post.index');
    }
    
}
