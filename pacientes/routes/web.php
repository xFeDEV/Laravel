<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPatient;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [ControllerPatient::class, 'index'])->name('index');
Route::get('/create', [ControllerPatient::class, 'create'])->name('create');
Route::post('/store', [ControllerPatient::class, 'store'])->name('store');
Route::get('/edit/{patient}', [ControllerPatient::class, 'edit'])->name('edit');
Route::put('/update/{patient}', [ControllerPatient::class, 'update'])->name('update');
Route::get('/show/{patient}', [ControllerPatient::class, 'show'])->name('show');
Route::delete('/destroy/{patient}', [ControllerPatient::class, 'destroy'])->name('destroy');