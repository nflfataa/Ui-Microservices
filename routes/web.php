<?php

use Illuminate\Support\Facades\Route;

// Halaman Publik
Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

// Halaman Internal (Dashboard Area)
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/obat', function () {
    return view('obat');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});