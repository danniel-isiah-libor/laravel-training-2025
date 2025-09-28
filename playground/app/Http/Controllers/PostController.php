<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\{Post, User};


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $posts = Post::simplePaginate(5);
        // $posts = Post::with(['user'])->get();
        // return response()->json($posts);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
        $validatedForm = $request->validated();
        Post::create($validatedForm);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id=null)
    {
        // //
        $user = User::
            // with([
            // 'posts' => function($query){
            //     $query->where('is_published', true);
            // }
            // ])
            whereHas('posts', function($query){
                $query->where('is_published', true);
            })
            ->find($id);
        return response()->json($user);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        // $post = Post::find($id)->first();
        // dd($post);
        return view('post.edit', [
            'post'=>$post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request)
    {
        //
        $validatedForm = $request->validated();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
