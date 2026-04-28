<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Halaman Publik
Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

// Halaman Internal (Dashboard Area)
Route::get('/dashboard', [AuthController::class, 'index']);

Route::get('/obat', function () {
    return view('obat');
});

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