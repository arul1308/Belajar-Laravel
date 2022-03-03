<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Fachrullian",
        "email" => "rangebrawler@gmail.com",
        "img" => "profil.jpg",
  ]);
});

Route::get('/blog', [PostController::class, 'index']);
//halaman single post
Route::get('/blog/{post:slug}',[PostController::class,'show']);

Route::get('/categories', function(){
    return view('categories',[
        'tittle' => 'Post Categories',
        "active" => 'posts',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('blog', [
        'tittle' => "Post by Category : $category->name",
        "active" => 'posts',
        'posts' => $category->posts->load('category','author')
    ]);
});

Route::get('/author/{author:username}', function(User $author) {
    return view('blog', [
        'tittle' => "Post by Author: $author->name",
        'posts' => $author->posts->load('category','author')
    ]);
});