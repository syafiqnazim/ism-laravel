<?php

use App\Http\Controllers\KursusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});


Route::middleware('auth')->group(function() {
    // UserController
    Route::resource('users', UserController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::post('change-password/{id}', [UserController::class, 'changePassword'])->name('change-password');
    Route::get('pendaftaran-pengguna', [PageController::class, 'pendaftaranPengguna'])->name('pendaftaran-pengguna');
    Route::get('senarai-pengguna', [PageController::class, 'senaraiPengguna'])->name('senarai-pengguna');
    Route::get('ubah-pengguna/{id}', [PageController::class, 'ubahPengguna'])->name('ubah-pengguna');
    Route::get('ubah-kata-laluan/{id}', [PageController::class, 'ubahKataLaluan'])->name('ubah-kata-laluan');

    // KursusController
    Route::resource('kursus', KursusController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('pendaftaran-kursus', [PageController::class, 'pendaftaranKursus'])->name('pendaftaran-kursus');
    Route::get('penjadualan-kursus', [PageController::class, 'penjadualanKursus'])->name('penjadualan-kursus');
    Route::get('profil-penceramah', [PageController::class, 'profilPenceramah'])->name('profil-penceramah');
});