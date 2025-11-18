<?php

/**
 * Web Routes
 * 
 * Deskripsi: Routing untuk aplikasi pendaftaran beasiswa
 * Author: Developer
 * Version: 1.0
 * Date: 2024
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Daftar route untuk aplikasi beasiswa:
| - GET / : Halaman utama
| - GET /daftar : Form pendaftaran beasiswa
| - POST /daftar : Proses penyimpanan data pendaftaran
| - GET /hasil : Tampilan hasil pendaftaran
|
*/

// Route halaman utama
Route::get('/', [BeasiswaController::class, 'index'])->name('beasiswa.index');

// Route form pendaftaran
Route::get('/daftar', [BeasiswaController::class, 'daftar'])->name('beasiswa.daftar');

// Route proses pendaftaran
Route::post('/daftar', [BeasiswaController::class, 'store'])->name('beasiswa.store');

// Route hasil pendaftaran
Route::get('/hasil', [BeasiswaController::class, 'hasil'])->name('beasiswa.hasil');