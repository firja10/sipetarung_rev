<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Imports\TowersImport;
use App\Imports\UsersImport;
use App\Imports\PenertibansImport;
use App\Imports\PengaduansImport;
use App\Imports\PertelaansImport;
use App\Imports\SkrksImport;
use App\Imports\SlfsImport;
use Maatwebsite\Excel\Facades\Excel;

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

Route::patch('/menara/{id}', [App\Http\Controllers\TowerController::class, 'update'])->name('update_menara_id')->middleware('auth');







//// Halaman SKRK-IMB
Route::get('/skrk-imb', [App\Http\Controllers\SkrkController::class, 'index'])->name('skrk_index')->middleware('auth');
Route::get('/skrk-imb/search_data', [App\Http\Controllers\SkrkController::class, 'search_imb'])->name('search_imb')->middleware('auth');
Route::get('/skrk-imb/{id}', [App\Http\Controllers\SkrkController::class, 'show'])->name('skrk_imb_id')->middleware('auth');
Route::patch('/skrk-imb/{id}', [App\Http\Controllers\SkrkController::class, 'update'])->name('update_skrk_imb_id')->middleware('auth');



//// Halaman SLF 
Route::get('/slf', [App\Http\Controllers\SlfController::class, 'index'])->name('slf_index')->middleware('auth');
Route::get('/slf/search_data', [App\Http\Controllers\SlfController::class, 'search_slf'])->name('search_slf')->middleware('auth');
Route::get('/slf/{id}', [App\Http\Controllers\SlfController::class, 'show'])->name('slf_id')->middleware('auth');
Route::patch('/slf/{id}', [App\Http\Controllers\SlfController::class, 'update'])->name('update_slf_id')->middleware('auth');



//// Halaman Pertelaan
Route::get('/pertelaan', [App\Http\Controllers\PertelaanController::class, 'index'])->name('pertelaan_index')->middleware('auth');
Route::get('/pertelaan/search_data', [App\Http\Controllers\PertelaanController::class, 'search_pertelaan'])->name('search_pertelaan')->middleware('auth');
Route::get('/pertelaan/{id}', [App\Http\Controllers\PertelaanController::class, 'show'])->name('pertelaan_id')->middleware('auth');
Route::patch('/pertelaan/{id}', [App\Http\Controllers\PertelaanController::class, 'update'])->name('update_pertelaan_id')->middleware('auth');





//// Halaman Penertiban 
Route::get('/penertiban', [App\Http\Controllers\PenertibanController::class, 'index'])->name('penertiban_index')->middleware('auth');
Route::get('/penertiban/search_data', [App\Http\Controllers\PenertibanController::class, 'search_penertiban'])->name('search_penertiban')->middleware('auth');

Route::get('/penertiban/tambah_data', [App\Http\Controllers\PenertibanController::class, 'tambah_penertiban'])->name('tambah_penertiban')->middleware('auth');

Route::post('/penertiban/store', [App\Http\Controllers\PenertibanController::class, 'store_penertiban'])->name('store_penertiban')->middleware('auth');

Route::get('/penertiban/{id}', [App\Http\Controllers\PenertibanController::class, 'show'])->name('penertiban_id')->middleware('auth');

Route::patch('/penertiban/{id}', [App\Http\Controllers\PenertibanController::class, 'update'])->name('update_penertiban_id')->middleware('auth');


Route::get('/penertiban/{id}/edit', [App\Http\Controllers\PenertibanController::class, 'edit'])->name('penertiban_id_edit')->middleware('auth');





//// Halaman Pengaduan
Route::get('/pengaduan', [App\Http\Controllers\PengaduanController::class, 'index'])->name('pengaduan_index')->middleware('auth');
Route::get('/pengaduan/search_data', [App\Http\Controllers\PengaduanController::class, 'search_pengaduan'])->name('search_pengaduan')->middleware('auth');

Route::get('/pengaduan/tambah_data', [App\Http\Controllers\PengaduanController::class, 'tambah_pengaduan'])->name('tambah_pengaduan')->middleware('auth');

Route::post('/pengaduan/store', [App\Http\Controllers\PengaduanController::class, 'store_pengaduan'])->name('store_pengaduan')->middleware('auth');

Route::get('/pengaduan/{id}', [App\Http\Controllers\PengaduanController::class, 'show'])->name('pengaduan_id')->middleware('auth');

Route::patch('/pengaduan/{id}', [App\Http\Controllers\PengaduanController::class, 'update'])->name('update_pengaduan_id')->middleware('auth');





/// Halaman TABG

Route::get('/tabg', [App\Http\Controllers\TabgController::class, 'index'])->name('tabg_index')->middleware('auth');
Route::get('/tabg/search_data', [App\Http\Controllers\TabgController::class, 'search_tabg'])->name('search_tabg')->middleware('auth');
Route::get('/tabg/{id}', [App\Http\Controllers\TabgController::class, 'show'])->name('tabg_id')->middleware('auth');
Route::patch('/tabg/{id}', [App\Http\Controllers\TabgController::class, 'update'])->name('update_tabg_id')->middleware('auth');





/// Import CSV Tower ke Web 

Route::post('import_menara', function () {
    Excel::import(new TowersImport, request()->file('file_menara'));
    return redirect()->back()->with('success','Data Imported Successfully');
});






//// Belum, dikerjakan tanggal 11 Nopember 2022

/// Import CSV Penertiban ke Web
Route::post('import_penertiban', function () {
    Excel::import(new PenertibansImport, request()->file('file_penertiban'));
    return redirect()->back()->with('success','Data Imported Successfully');
});



/// Import CSV Pengaduan ke Web
Route::post('import_pengaduan', function () {
    Excel::import(new PengaduansImport, request()->file('file_pengaduan'));
    return redirect()->back()->with('success','Data Imported Successfully');
});




/// Import CSV Pengaduan ke Web
Route::post('import_pertelaan', function () {
    Excel::import(new PertelaansImport, request()->file('file_pertelaan'));
    return redirect()->back()->with('success','Data Imported Successfully');
});






/// Import CSV SLF ke Web
Route::post('import_slf', function () {
    Excel::import(new SlfsImport, request()->file('file_slf'));
    return redirect()->back()->with('success','Data Imported Successfully');
});






/// Import CSV User ke Web 

Route::post('import_user', function () {
    Excel::import(new UsersImport, request()->file('file_user'));
    return redirect()->back()->with('success','Data Imported Successfully');
});


// Route::post('import_user', [App\Http\Controllers\TowerController::class, 'import_data_user'])->name('import_data_user')->middleware('auth');


Route::post('import_skrk', function () {
    Excel::import(new SkrksImport, request()->file('file_skrk'));
    return redirect()->back()->with('success','Data Imported Successfully');
});

