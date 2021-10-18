<?php

use App\Http\Controllers\AsramaController;
use App\Http\Controllers\KursusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenyelenggaraanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TempahanController;
use App\Http\Controllers\KewanganController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\PenceramahController;
use App\Http\Controllers\PengurusanIctController;
use App\Http\Controllers\TempahanKenderaanController;
use App\Http\Controllers\SenaraiKenderaanController;
use App\Http\Controllers\SenaraiPemanduController;

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


Route::middleware('auth')->group(function () {
    // UserController
    Route::resource('users', UserController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::post('change-password/{id}', [UserController::class, 'changePassword'])->name('change-password');
    Route::get('pendaftaran-pengguna', [PageController::class, 'pendaftaranPengguna'])->name('pendaftaran-pengguna');
    Route::get('senarai-pengguna', [PageController::class, 'senaraiPengguna'])->name('senarai-pengguna');
    Route::get('ubah-pengguna/{id}', [PageController::class, 'ubahPengguna'])->name('ubah-pengguna');
    Route::get('ubah-kata-laluan/{id}', [PageController::class, 'ubahKataLaluan'])->name('ubah-kata-laluan');

    // KursusController
    Route::resource('kursus', KursusController::class, ['only' => ['store', 'update', 'destroy', 'index']]);
    Route::get('pendaftaran-kursus', [PageController::class, 'pendaftaranKursus'])->name('pendaftaran-kursus');
    Route::get('penjadualan-kursus', [PageController::class, 'penjadualanKursus'])->name('penjadualan-kursus');
    Route::get('laporan-kursus', [PageController::class, 'laporanKursus'])->name('laporan-kursus');

    // AsramaController
    Route::resource('asrama', AsramaController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('tempahan-dalaman', [AsramaController::class, 'tempahanDalaman'])->name('tempahan-dalaman');
    Route::get('pengurusan-asrama', [AsramaController::class, 'pengurusanAsrama'])->name('pengurusan-asrama');
    Route::get('tempahan-khusus', [AsramaController::class, 'tempahanKhusus'])->name('tempahan-khusus');

    // PenyelenggaranController
    Route::resource('penyelenggaraan', PenyelenggaraanController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('senarai-tugasan', [PenyelenggaraanController::class, 'senaraiTugasan'])->name('senarai-tugasan');
    Route::get('penugasan-penyelenggara', [PenyelenggaraanController::class, 'penugasanPenyelenggara'])->name('penugasan-penyelenggara');

    // TempahanController
    Route::resource('tempahan', TempahanController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('bilik-latihan', [TempahanController::class, 'bilikLatihan'])->name('bilik-latihan');
    Route::get('kenderaan', [TempahanController::class, 'kenderaan'])->name('kenderaan');
    Route::get('tempahan-1mtc', [TempahanController::class, 'tempahan1mtc'])->name('tempahan-1mtc');

    // KewanganController
    Route::resource('kewangan', KewanganController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('kutipan', [KewanganController::class, 'kutipan'])->name('kutipan');

    // AduanController
    Route::resource('aduan', AduanController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('aduan', [AduanController::class, 'aduan'])->name('aduan');

    // TempahanKenderaanController
    Route::resource('tempahan-kenderaan', TempahanKenderaanController::class, ['only' => ['store', 'update', 'destroy']]);

    // SenaraiKenderaanController
    Route::resource('senarai-kenderaan', SenaraiKenderaanController::class, ['only' => ['store', 'update', 'destroy']]);

    // SenaraiPemanduController
    Route::resource('senarai-pemandu', SenaraiPemanduController::class, ['only' => ['store', 'update', 'destroy']]);

    // PenceramahController
    Route::resource('penceramah', PenceramahController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('profil-penceramah', [PenceramahController::class, 'profilPenceramah'])->name('profil-penceramah');

    // PengurusanICTController
    Route::resource('pengurusanict', PengurusanIctController::class, ['only' => ['store', 'update', 'destroy', 'index']]);
    Route::get('pengurusan-ict', [PengurusanIctController::class, 'pengurusanIct'])->name('pengurusan-ict');
});
