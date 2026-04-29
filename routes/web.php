<?php

use App\Http\Controllers\backend\AccBidangUmumController;
use Illuminate\Support\Facades\Route;

// ================= BACKEND =================
use App\Http\Controllers\backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\backend\BeritaUtamaController;
use App\Http\Controllers\backend\BidangUmumController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\GaleriBidangUmumController;
use App\Http\Controllers\backend\GaleriPokja1Controller;
use App\Http\Controllers\backend\GaleriPokja2Controller;
use App\Http\Controllers\backend\GaleriPokja3Controller;
use App\Http\Controllers\backend\GaleriPokja4Controller;
use App\Http\Controllers\backend\InputBeritaController;
use App\Http\Controllers\backend\InputPengumumanController;
use App\Http\Controllers\backend\Pokja1Controller as BackendPokja1Controller;
use App\Http\Controllers\backend\Pokja2Controller as BackendPokja2Controller;
use App\Http\Controllers\backend\Pokja3Controller as BackendPokja3Controller;
use App\Http\Controllers\backend\Pokja4Controller as BackendPokja4Controller;
use App\Http\Controllers\backend\ProfileController as BackendProfileController;
use App\Http\Controllers\backend\TtdController;

// ================= FRONTEND =================
use App\Http\Controllers\frontend\BeritaController;
use App\Http\Controllers\frontend\LambangController;
use App\Http\Controllers\frontend\MarsController;
use App\Http\Controllers\frontend\PengumumanController;
use App\Http\Controllers\frontend\Pokja1Controller;
use App\Http\Controllers\frontend\Pokja2Controller;
use App\Http\Controllers\frontend\Pokja3Controller;
use App\Http\Controllers\frontend\Pokja4Controller;
use App\Http\Controllers\frontend\SejarahController;
use App\Http\Controllers\frontend\VisiMisiController;

require __DIR__ . '/auth.php';


// ================= HOME =================
Route::get('/', function () {
    return view('home');
})->name('home');


// ================= DASHBOARD =================
Route::get('/dashboard', function () {
    return view('backend.utama');
})->middleware(['auth:web,pengguna'])->name('admin.dashboard');


// ================= FRONTEND =================
Route::prefix('frontend')->name('frontend.')->group(function () {

    Route::resource('berita', BeritaController::class);
    Route::resource('pengumuman', PengumumanController::class);
    Route::resource('lambang', LambangController::class);
    Route::resource('mars', MarsController::class);

    Route::resource('pokja1', Pokja1Controller::class);
    Route::resource('pokja2', Pokja2Controller::class);
    Route::resource('pokja3', Pokja3Controller::class);
    Route::resource('pokja4', Pokja4Controller::class);

    Route::resource('visimisi', VisiMisiController::class);
    Route::resource('sejarah', SejarahController::class);
});


// ================= BACKEND =================
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::resource('dashboard', DashboardController::class);

    Route::resource('accbidangumum', AccBidangUmumController::class);

    Route::resource('input_berita', InputBeritaController::class);
    Route::resource('input_pengumuman', InputPengumumanController::class);


    Route::resource('ttd', TtdController::class);
    Route::resource('bidangumum', BidangUmumController::class);

    Route::resource('galeribidangumum', GaleriBidangUmumController::class);
    Route::resource('galeripokja1', GaleriPokja1Controller::class);
    Route::resource('galeripokja2', GaleriPokja2Controller::class);
    Route::resource('galeripokja3', GaleriPokja3Controller::class);
    Route::resource('galeripokja4', GaleriPokja4Controller::class);

    Route::resource('pokja1', BackendPokja1Controller::class);
    Route::resource('pokja2', BackendPokja2Controller::class);
    Route::resource('pokja3', BackendPokja3Controller::class);
    Route::resource('pokja4', BackendPokja4Controller::class);

    Route::resource('profile', BackendProfileController::class);
});
