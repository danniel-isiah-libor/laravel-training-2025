<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function viewFeed()
    {
        $user = User::with([
            'posts' => function ($query) {
                $query->where('is_published', true);
            }
        ])
            ->where('id', 2)
            ->first();
        $posts = Post::paginate();
        return view('posts.feed', [
            'posts' => $posts,
        ]);
    }
}
