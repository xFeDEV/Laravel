<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts', PostController::class)->middleware('auth');
Route::resource('posts', PostController::class)->except(['index']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


Route::get('/mi-perfil/posts', [PostController::class, 'myPosts'])->name('mi-perfil.posts');


Route::get('/feed', [FeedController::class, 'index'])->name('feed');

Route::post('/posts/{post}/like', [LikeController::class, 'like'])->name('posts.like');
Route::delete('/posts/{post}/unlike', [LikeController::class, 'unlike'])->name('posts.unlike');


Route::get('/', [FeedController::class, 'index'])->name('feed');


