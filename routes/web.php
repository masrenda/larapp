<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

// home route
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

// about route
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adiyaksa Tarendra",
        "email" => "tarenadiyaksa@gmail.com",
        "images" => "https://upload.wikimedia.org/wikipedia/commons/1/10/C_Zetkin_1.jpg",
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class, 'show']);
