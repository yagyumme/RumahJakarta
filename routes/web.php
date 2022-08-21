<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Category;

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
        "title" => "Home",
        'categories' => Category::all()
    ]);
    
});

/* Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Yagyu Munenori Michael Emmanuel",
        "email" => "yagyu.535180067@stu.untar.ac.id",
        "image" => "Munenori.jpeg"
    ]);
});

Route::get('/disewa', function(){
    return view('disewa', [
        "title" => "Disewa"
    ]);
});

Route::get('/kpr', function(){
    return view('kpr', [
        "title" => "KPR"
    ]);
});

Route::get('/pasangiklan', function(){
    return view('pasangiklan', [
        "title" => "Pasang Iklan"
    ]);
});

Route::get('/iklansaya', function(){
    return view('iklansaya', [
        "title" => "Iklan Saya"
    ]);
}); */

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
        /* "posts" => Post::latest()->filter()->paginate(5) */
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');