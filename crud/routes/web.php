<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

/* Route::get('/', function () {
    return view('index');
}); */

Route::get('/index', [PersonController::class,'index'])->name('index');
Route::get('/create', [PersonController::class,'create'])->name('create');
Route::get('/show/{note}', [PersonController::class,'show'])->name('show');
Route::post('/store', [PersonController::class,'store'])->name('store');


