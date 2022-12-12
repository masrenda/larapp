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
            "blogPost" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('posts', [
            "title" => "Single Post",
            "blogPost" => Post::find($slug)
        ]);
    }
}
