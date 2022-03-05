<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $tittle = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $tittle = ' Genre ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $tittle = ' by ' . $author->name;
        }

        return view('blog',[
            "tittle" => 'ALL POST' . $tittle,
            "active" => 'blog',
            // "posts" => Post::all()
            // menampilkan postingan dari terbaru
            "posts" => Post::latest()->filter(request(['search', 'category','author']))->paginate(7)->withQueryString()
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
