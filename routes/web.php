<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiwa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/mahasiswa/show', [MahasiswaController::class, 'show'])->name('mahasiswa.index');
Route::get('/mahasiswa/detail/{id}', [MahasiswaController::class, 'detail']);
Route::get('/mahasiswa/create/{id}', [MahasiswaController::class, 'create_kuliah']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'simpan'])->name('mahasiswa.store');