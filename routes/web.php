<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\HomeController; 
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MerekController;
use App\Http\Controllers\Admin\MobilController;

// 1. Rute Halaman Depan (Landing Page) memanggil HomeController
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mobil/{id}', [HomeController::class, 'detail'])->name('mobil.detail');
Route::post('/kirim-pesan', [HomeController::class, 'storePesan'])->name('pesan.store');

// 2. Rute Login 
// Mengganti /login menjadi URL rahasia
Route::get('/naga-masuk-admin', [AuthController::class, 'index'])->name('login');
Route::post('/naga-masuk-admin', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 3. GROUP ROUTE ADMIN (Kriteria 8 - Dilindungi oleh Middleware Auth)
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('merek', MerekController::class);
    Route::resource('mobil', MobilController::class);
});