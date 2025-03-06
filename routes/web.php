<?php

use App\Http\Controllers\JadwalDokter;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\JadwalDokterController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RiwayatJanjiController;
use App\Http\Controllers\CarouselController;

// Route untuk halaman utama
Route::get('/', [JadwalDokterController::class, 'home'])->name('home');

// Route untuk jadwal dokter
Route::resource('/jadwal-dokter', JadwalDokterController::class);
Route::get('/jadwal-dokter', [JadwalDokterController::class, 'search_doctors'])->name('search_doctors');

// Route untuk buat janji
Route::get('/buat-janji', function () {
    $dokter = request('dokter');
    $spesialis = request('spesialis');
    $selected_day = request('hari', 'Senin'); // Default hari Senin
    return view('buat_janji', compact('dokter', 'spesialis', 'selected_day'));
});

// Route untuk menyimpan janji
Route::post('/buat-janji', [AppointmentController::class, 'store'])->name('appointment.store');

// Route untuk riwayat janji
Route::get('/dashboard-riwayat-janji', [RiwayatJanjiController::class, 'index'])->name('riwayat-janji.index');
Route::get('/dashboard-riwayat-janji/export', [RiwayatJanjiController::class, 'exportPdf'])->name('riwayat-janji.export');

// Route untuk promo dan berita
Route::get('/promo', [PromoController::class, 'indexPromo'])->name('promo');
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/detail-berita', function () {
    return view('detail_berita');
});

// Route untuk dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route untuk login dan logout
Route::get('/dashboard/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/dashboard/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk dashboard dokter dan promo
Route::resource('/dashboard-dokter', DoctorController::class)->middleware('auth');
Route::resource('/dashboard-promo', PromoController::class)->middleware('auth');


// Carousel

Route::resource('dashboard-carousel', CarouselController::class);
