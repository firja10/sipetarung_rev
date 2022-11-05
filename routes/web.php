<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();

// Route::get('/', function () {
//     return view('home1');
// });

//// Halaman Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home1')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



//// Halaman Menara 

Route::get('/menara', [App\Http\Controllers\TowerController::class, 'index'])->name('tower_index')->middleware('auth');


