<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BelajarlagiController;

// Route dasar
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/linktreegh', function () {
    return view('linktreegh');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/tugas-ets', function () {
    return view('tugas_ets');
});

Route::get('/alwida', function () {
    return view('5026241090_AlwidaRahmat');
});

// Formulir Laravel
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Form Lipstick (tetap ada)
Route::get('/lipstick', [BelajarlagiController::class, 'formulir']);
Route::post('/lipstick/proses', [BelajarlagiController::class, 'proses']);

// CRUD Pegawai Database
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// CRUD Lipstick Database
Route::get('/lipstickdb', [BelajarlagiController::class, 'index']);
Route::get('/lipstickdb/tambah', [BelajarlagiController::class, 'tambahlipstick']);
Route::post('/lipstickdb/store', [BelajarlagiController::class, 'store']);
Route::get('/lipstickdb/edit/{id}', [BelajarlagiController::class, 'editlipstick']);
Route::post('/lipstickdb/update', [BelajarlagiController::class, 'update']);
Route::get('/lipstickdb/hapus/{id}', [BelajarlagiController::class, 'hapus']);
Route::get('/lipstickdb/cari', [BelajarlagiController::class, 'cari']);
