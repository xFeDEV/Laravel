<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\NoteController;

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

Route::get('/index', [NoteController::class,'index'])->name('index');
Route::get('/create', [NoteController::class,'create'])->name('create');
Route::post('/store', [NoteController::class,'store'])->name('store');
Route::get('/edit/{note}', [NoteController::class,'edit'])->name('edit');
Route::put('/update/{note}', [NoteController::class,'update'])->name('update');
Route::get('/show/{note}', [NoteController::class,'show'])->name('show');


/* Route::view('/about','landing.about')->name('about');
Route::view('/arquitectura','landing.arquitectura')->name('arquitectura');
Route::view('/event','landing.event')->name('event'); */
/* Route::view('/index','index')->name('index');
Route::view('/event','event')->name('event');
Route::view('/landing','layout.landing')->name('landing');
Route::view('/contact','contact')->name('contact');
Route::view('/services','services')->name('services');
Route::view('/about','about')->name('about');
 */
