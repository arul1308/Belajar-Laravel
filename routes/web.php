<?php

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "tittle" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Fachrullian",
        "email" => "rangebrawler@gmail.com",
        "img" => "profil.jpg",
        "active" => "about"
  ]);
});

Route::get('/blog', [PostController::class, 'index']);
//halaman single post
Route::get('/blog/{post:slug}',[PostController::class,'show']);

Route::get('/categories', function(){
    return view('categories',[
        'tittle' => 'Post Categories',
        'active' => 'posts',
        'categories' => Category::all()
    ]);
});

Route::get('/author/{author:username}', function(User $author) {
    return view('blog', [
        'tittle' => "Post by Author: $author->name",
        'active' => 'post',
        'posts' => $author->posts->load('category','author')
    ]);
});

Route::get('/login', [LoginController::class,'index']);


Route::get('/register', [RegisterController::class,'index']);