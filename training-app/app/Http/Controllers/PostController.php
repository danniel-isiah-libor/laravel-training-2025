<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Post, User};
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $userCounter = User::withCount('posts')->get();

        dd($userCounter->toArray());

        $data = Post::with('user')->Paginate(10);

        foreach($data as $post){
             dump($post->user->email);
        }
        dd();

        // dd($data->toArray());
        return view('Posts', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
