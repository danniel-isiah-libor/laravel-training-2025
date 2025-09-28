<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Client\Request;

class PostController extends Controller
{
    public function show(Request $request, $id = null)
    {
        $post = Post::find($id);
        return view();
    }
}
