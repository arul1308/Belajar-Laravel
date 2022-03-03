<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog',[
            "tittle" => 'ALL POST',
            "active" => 'blog',
            // "posts" => Post::all()
            // menampilkan postingan dari terbaru
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            "tittle" => 'Single Post',
            "active" => 'posts',
            "post" => $post
        ]);
    }
}
