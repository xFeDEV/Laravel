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
Route::post('/store', [PersonController::class,'store'])->name('store');
Route::get('/edit/{person}', [PersonController::class,'edit'])->name('edit');
Route::put('/update/{person}', [PersonController::class,'update'])->name('update');
Route::get('/show/{person}', [PersonController::class,'show'])->name('show');
Route::delete('/destroy/{person}', [PersonController::class,'destroy'])->name('destroy');

Route::get('/edit2', function () {
    return view('edit2');
});