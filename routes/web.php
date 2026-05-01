<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\ProfilController;
use App\Http\Controllers\Backend\GaleriController;
use App\Http\Controllers\Backend\KelompokKerjaController;
use App\Http\Controllers\TandaTanganController;
Route::get('/', [HomeController::class, 'index']);

// Routes untuk Berita
Route::resource('berita', BeritaController::class);

// Routes untuk Pengumuman
Route::resource('pengumuman', PengumumanController::class);

// Dashboard (Protected by auth)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Tanda Tangan
    Route::get('/tanda-tangan', [TandaTanganController::class, 'index'])->name('tanda-tangan.index');
    Route::post('/tanda-tangan', [TandaTanganController::class, 'store'])->name('tanda-tangan.store');
    Route::get('/tanda-tangan/{id}/edit', [TandaTanganController::class, 'edit'])->name('tanda-tangan.edit');
    Route::put('/tanda-tangan/{id}', [TandaTanganController::class, 'update'])->name('tanda-tangan.update');
    Route::delete('/tanda-tangan/{id}', [TandaTanganController::class, 'destroy'])->name('tanda-tangan.destroy');

    // Profil
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::get('/profil/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/profil/update', [ProfilController::class, 'update'])->name('profil.update');
    Route::post('/profil/password', [ProfilController::class, 'updatePassword'])->name('profil.password');

    // Galeri
    Route::get('/galeri/bidang-umum', [GaleriController::class, 'bidangUmum'])->name('galeri.bidang-umum');
    Route::get('/galeri/bidang-umum/{id}/edit', [GaleriController::class, 'editBidangUmum'])->name('galeri.bidang-umum.edit');
    Route::put('/galeri/bidang-umum/{id}', [GaleriController::class, 'updateBidangUmum'])->name('galeri.bidang-umum.update');
    Route::delete('/galeri/bidang-umum/{id}', [GaleriController::class, 'deleteBidangUmum'])->name('galeri.bidang-umum.delete');
    Route::get('/galeri/pokja1', [GaleriController::class, 'pokja1'])->name('galeri.pokja1');
    Route::get('/galeri/pokja2', [GaleriController::class, 'pokja2'])->name('galeri.pokja2');
    Route::get('/galeri/pokja3', [GaleriController::class, 'pokja3'])->name('galeri.pokja3');
    Route::get('/galeri/pokja4', [GaleriController::class, 'pokja4'])->name('galeri.pokja4');

    // Kelompok Kerja
    Route::get('/kelompok-kerja/bidang-umum', [KelompokKerjaController::class, 'bidangUmum'])->name('kelompok-kerja.bidang-umum');
    Route::get('/kelompok-kerja/pokja1', [KelompokKerjaController::class, 'pokja1'])->name('kelompok-kerja.pokja1');
    Route::get('/kelompok-kerja/pokja2', [KelompokKerjaController::class, 'pokja2'])->name('kelompok-kerja.pokja2');
    Route::get('/kelompok-kerja/pokja3', [KelompokKerjaController::class, 'pokja3'])->name('kelompok-kerja.pokja3');
    Route::get('/kelompok-kerja/pokja4', [KelompokKerjaController::class, 'pokja4'])->name('kelompok-kerja.pokja4');
});

// Include Auth Routes
require __DIR__.'/auth.php';