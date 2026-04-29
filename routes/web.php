<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;

// Halaman Publik
Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

// Halaman Internal (Dashboard Area)
Route::get('/dashboard', [AuthController::class, 'index']);

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/register', function () {
    return view('register');
});


// ... route halaman view sebelumnya ...

// Route untuk memproses form register ke Flask
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Pastikan ini ada di file routes/web.php kamu

// Route untuk menampilkan halaman form login
// Route::get('/login', function () {
//     return view('login');
// })->name('login');

// Route untuk memproses form login saat disubmit
Route::post('/login', [AuthController::class, 'login'])->name('login');
// Rute untuk menangani form submission Tambah Obat
// 1. Rute untuk Menampilkan Katalog dan Pencarian by ID (Read)
Route::get('/obat', [ObatController::class, 'index']);

// 2. Rute untuk Memproses Form Tambah Obat (Create)
Route::post('/obat/store', [ObatController::class, 'store']);

// 3. Rute untuk Memproses Form Edit Obat (Update)
Route::put('/obat/{id}/update', [ObatController::class, 'update']);

// 4. Rute untuk Memproses Tombol Hapus Obat (Delete)
Route::delete('/obat/{id}/destroy', [ObatController::class, 'destroy']);