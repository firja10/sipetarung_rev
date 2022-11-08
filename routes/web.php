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

// Route::get('/menara/search_data', [App\Http\Controllers\TowerController::class, 'search_data'])->name('search_data')->middleware('auth');

Route::get('/menara/search_data', [App\Http\Controllers\TowerController::class, 'search_tower'])->name('search_tower')->middleware('auth');
Route::get('/menara/{id}', [App\Http\Controllers\TowerController::class, 'show'])->name('menara_id')->middleware('auth');






//// Halaman SKRK-IMB
Route::get('/skrk-imb', [App\Http\Controllers\SkrkController::class, 'index'])->name('skrk_index')->middleware('auth');
Route::get('/skrk-imb/search_data', [App\Http\Controllers\SkrkController::class, 'search_imb'])->name('search_imb')->middleware('auth');




//// Halaman SLF 
Route::get('/slf', [App\Http\Controllers\SlfController::class, 'index'])->name('slf_index')->middleware('auth');
Route::get('/slf/search_data', [App\Http\Controllers\SlfController::class, 'search_slf'])->name('search_slf')->middleware('auth');



//// Halaman Pertelaan
Route::get('/pertelaan', [App\Http\Controllers\PertelaanController::class, 'index'])->name('pertelaan_index')->middleware('auth');
Route::get('/pertelaan/search_data', [App\Http\Controllers\PertelaanController::class, 'search_pertelaan'])->name('search_pertelaan')->middleware('auth');



//// Halaman Penertiban 
Route::get('/penertiban', [App\Http\Controllers\PenertibanController::class, 'index'])->name('penertiban_index')->middleware('auth');
Route::get('/penertiban/search_data', [App\Http\Controllers\PenertibanController::class, 'search_penertiban'])->name('search_penertiban')->middleware('auth');

Route::get('/penertiban/tambah_data', [App\Http\Controllers\PenertibanController::class, 'tambah_penertiban'])->name('tambah_penertiban')->middleware('auth');

Route::post('/penertiban/store', [App\Http\Controllers\PenertibanController::class, 'store_penertiban'])->name('store_penertiban')->middleware('auth');





//// Halaman Pengaduan
Route::get('/pengaduan', [App\Http\Controllers\PengaduanController::class, 'index'])->name('pengaduan_index')->middleware('auth');
Route::get('/pengaduan/search_data', [App\Http\Controllers\PengaduanController::class, 'search_pengaduan'])->name('search_pengaduan')->middleware('auth');

Route::get('/pengaduan/tambah_data', [App\Http\Controllers\PengaduanController::class, 'tambah_pengaduan'])->name('tambah_pengaduan')->middleware('auth');

Route::post('/pengaduan/store', [App\Http\Controllers\PengaduanController::class, 'store_pengaduan'])->name('store_pengaduan')->middleware('auth');




/// Halaman TABG

Route::get('/tabg', [App\Http\Controllers\TabgController::class, 'index'])->name('tabg_index')->middleware('auth');
Route::get('/tabg/search_data', [App\Http\Controllers\TabgController::class, 'search_tabg'])->name('search_tabg')->middleware('auth');

