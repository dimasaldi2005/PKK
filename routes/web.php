<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;

Route::get('/', [HomeController::class, 'index']);

// Routes untuk Berita
Route::resource('berita', BeritaController::class);

// Routes untuk Pengumuman
Route::resource('pengumuman', PengumumanController::class);