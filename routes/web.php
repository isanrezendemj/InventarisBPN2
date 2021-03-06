<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PenggunaBidangController;
use App\Http\Controllers\PenggunaPegawaiController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\InputPenggunaPegawaiController;
use App\Http\Controllers\InputPenggunaBidangController;
use App\Http\Controllers\InputInventarisController;
use App\Http\Controllers\InputRegisterMobileController;
use App\Http\Controllers\RegisterMobileController;
use App\Http\Controllers\HomeController;

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// imported
Route::middleware(['auth'])->group(function () {
    
    //AUTh
    Route::get('/logout', [LoginController::class, 'logout']);


    // jika di panggil register admin
    Route::get('/RegisterMobile', [RegisterMobileController::class, 'index']);
    Route::post('/simpan-data-register', [RegisterMobileController::class, 'store'])->name('simpan-data-mobile');
    Route::get('/delete-data-register/{id_security}', [RegisterMobileController::class, 'delete_single_data']);


    // jika dipanggil URL input inventaris
    
    Route::get('/Inventaris', [InventarisController::class, 'index']);
    Route::post('/simpan-data-inventaris', [InventarisController::class, 'store']);
    Route::get('/delete-data-inventaris/{id}', [InventarisController::class, 'delete_single_data']);
    Route::get('/edit-data-inventaris/{id}', [InventarisController::class, 'edit_single_data']);
    Route::post('/proses-edit-inventaris', [InventarisController::class, 'proses_edit']);

    // JIKA DIPANGGIL URL penggunabidang
    Route::get('/penggunabidang', [PenggunaBidangController::class, 'index']);
    Route::post('/simpan-data-bidang', [PenggunaBidangController::class, 'store']);
    Route::get('/delete-data-penggunabidang/{id}', [PenggunaBidangController::class, 'delete_single_data']);
    Route::get('/edit-data-penggunabidang/{id}', [PenggunaBidangController::class, 'edit_single_data']);
    Route::post('/proses-edit-penggunabidang', [PenggunaBidangController::class, 'proses_edit']);

    // JIKA DIPANGGIL URL penggunapegawai
    Route::get('/penggunapegawai', [PenggunaPegawaiController::class, 'index']);
    Route::post('/simpan-data-pegawai', [PenggunaPegawaiController::class, 'store']);
    Route::get('/delete-data-penggunapegawai/{NRP_NIK}', [PenggunapegawaiController::class, 'delete_single_data']);
    Route::get('/edit-data-penggunapegawai/{NRP_NIK}', [PenggunapegawaiController::class, 'edit_single_data']);
    Route::post('/proses-edit-penggunapegawai', [PenggunapegawaiController::class, 'proses_edit']);



    // input register mobile
    Route::get('/inputregistermobile', [inputregistermobileController::class, 'index']);


    // JIKA DIPANGGIL URL template
    Route::get('/template', [TemplateController::class, 'index']);

    // JIKA DIPANGGIL URL input pengguna  pegawai
    Route::get('/inputpenggunapegawai', [InputPenggunaPegawaiController::class, 'index']);

    // jika dipanggil URL inputpenggunabidang
    Route::get('/inputpenggunabidang', [InputPenggunaBidangController::class, 'index']);

    // jika dipanggil URL input inventaris
    Route::get('/inputinventaris', [InputInventarisController::class, 'index']);
    Route::middleware(['auth:sanctum', 'verified'])->get('Dasboard', function () {
        return view('Dasboard');
    })->name('Dasboard');



    // });
});
