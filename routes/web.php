<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);

// Routes untuk Berita
Route::resource('berita', BeritaController::class);

// Routes untuk Pengumuman
Route::resource('pengumuman', PengumumanController::class);

// Dashboard (Protected by auth)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Include Auth Routes
require __DIR__.'/auth.php';