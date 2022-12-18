<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', [
            "title" => "Blog",
            "blogPost" => Post::latest()->get()
            // "blogPost" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "Single Post",
            "blogPost" => $post
        ]);
    }
}
