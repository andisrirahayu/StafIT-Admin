<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LogKejadianController;
use App\Http\Controllers\PemantauanLiveController;
use App\Http\Controllers\CekLaporanController;
use App\Http\Controllers\EditProfilController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\LogLaporanKejadianController;
use App\Http\Controllers\LogBerdasarkanTanggalController;
use App\Http\Controllers\LogBerdasarkanWaktuController;
use App\Http\Controllers\CekLaporanKejadianController;
use App\Http\Controllers\CekLogLaporanKejadianController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\MenuUtamaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasswordController;

Route::get('/', function () {
    return view('menu-utama');
});

Route::get('/submenu', function () {
    return view('submenu');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::post('/registrasi', [RegistrationController::class, 'registrasi'])->name('registrasi.store');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', function () {
    return view('login'); // Atau sesuaikan dengan view Anda
})->name('login');

Route::get('/login', function () {
    return view('login');
});

Route::get('/profil', function () {
    return view('profil');
});

//contoh
Route::get('/profil-staf-it', function () {
    return view('profil-staf-it');
});

Route::get('/log-kejadian', function () {
    return view('log-kejadian');
});

Route::get('/pemantauan-live', function () {
    return view('pemantauan-live');
});


Route::get('/cek-laporan', function () {
    return view('cek-laporan');
});

Route::get('/edit-profil', function () {
    return view('edit-profil');
});

Route::get('/pengaturan', function () {
    return view('pengaturan');
});

Route::get('/edit-password', function () {
    return view('edit-password');
});

Route::get('/log-laporan-kejadian', function () {
    return view('log-laporan-kejadian');
});

Route::get('/log-berdasarkan-tanggal', function () {
    return view('log-berdasarkan-tanggal');
});

Route::get('/log-berdasarkan-waktu', function () {
    return view('log-berdasarkan-waktu');
});

Route::get('/cek-laporan-kejadian', function () {
    return view('cek-laporan-kejadian');
});

Route::get('/cek-log-laporan-kejadian', function () {
    return view('cek-log-laporan-kejadian');
});

Route::get('/deskripsi-berdasarkan-tanggal', function () {
    return view('deskripsi-berdasarkan-tanggal');
});


Route::get('/registrasi', [RegistrationController::class, 'showRegistrationForm'])->name('registrasi');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/profil', [ProfilController::class, 'showProfilForm'])->name('profil');

Route::get('/cek-laporan', [CekLaporanController::class, 'showCekLaporanForm'])->name('cek-laporan');

Route::get('/edit-profil', [EditProfilController::class, 'showEditProfilForm'])->name('edit-profil');

Route::get('/pengaturan', [PengaturanController::class, 'showPengaturanForm'])->name('pengaturan');

Route::get('/edit-password', [EditPasswordController::class, 'showEditPasswordForm'])->name('edit-password');

// Route untuk halaman Log Kejadian
Route::get('/log-kejadian', [LogLaporanKejadianController::class, 'index'])->name('log-kejadian');
Route::get('/log-laporan-kejadian', [LogLaporanKejadianController::class, 'laporanKejadian'])->name('log-laporan-kejadian');
Route::put('/laporan/{id}', [LogLaporanKejadianController::class, 'update'])->name('laporan.update');

// Route::get('/log-berdasarkan-tanggal', [LogBerdasarkanTanggalController::class, 'index'])->name('log-berdasarkan-tanggal');

// Route::get('/log-berdasarkan-waktu', [LogBerdasarkanWaktuController::class, 'showLogBerdasarkanWaktuForm'])->name('log-berdasarkan-waktu');

// Rute untuk log berdasarkan tanggal
Route::get('/log-berdasarkan-tanggal', [LogLaporanKejadianController::class, 'LogBerdasarkanTanggal'])->name('log-berdasarkan-tanggal');

// Rute untuk log berdasarkan waktu
Route::get('/log-berdasarkan-waktu', [LogLaporanKejadianController::class, 'LogBerdasarkanWaktu'])->name('log-berdasarkan-waktu');

Route::get('/cek-laporan-kejadian', [CekLaporanKejadianController::class, 'showCekLaporanKejadianForm'])->name('cek-laporan-kejadian');

// Route::get('/cek-log-laporan-kejadian', [CekLogLaporanKejadianController::class, 'showCekLogLaporanKejadianForm'])->name('cek-log-laporan-kejadian');
Route::get('/cek-log-laporan-kejadian', [CekLogLaporanKejadianController::class, 'index'])->name('cek-log-laporan-kejadian');


Route::get('/submenu', [SubmenuController::class, 'showSubmenuForm'])->name('submenu');

Route::get('/menu-utama', [MenuUtamaController::class, 'showMenuUtamaForm'])->name('menu-utama');

Route::post('/logout', function () {
    Auth::logout(); // Proses logout
    return redirect()->route('menu-utama'); // Arahkan ke halaman registrasi setelah logout
})->name('logout');

// Route::get('/cek-laporan', [LaporanController::class, 'index'])->name('cek-laporan');

Route::get('/cek-laporan-kejadian', [LaporanController::class, 'cekLaporan'])->name('cek-laporan-kejadian');
Route::get('/laporan/{id}/bantuan', [LaporanController::class, 'mintaBantuan'])->name('laporan.bantuan');
Route::get('/laporan/{id}/diatasi', [LaporanController::class, 'tandaiDiatasi'])->name('laporan.diatasi');

Route::get('/laporan/{id}/selesai', [LaporanController::class, 'tandaiSelesai'])->name('laporan.selesai');


Route::middleware('auth')->get('/profil', [UserController::class, 'showProfile'])->name('profil');

Route::post('/update-password', [PasswordController::class, 'updatePassword'])->name('update-password');

Route::middleware(['auth'])->group(function () {
    Route::get('pemantauan-live', [PemantauanLiveController::class, 'index'])->name('pemantauan-live');
});
