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
use App\Http\Controllers\ObjektifKursusController;
use App\Http\Controllers\PenceramahController;
use App\Http\Controllers\RatingPenceramahController;
use App\Http\Controllers\PengurusanIctController;
use App\Http\Controllers\TempahanKenderaanController;
use App\Http\Controllers\SenaraiKenderaanController;
use App\Http\Controllers\SenaraiPemanduController;
use App\Http\Controllers\SubmodulKursusController;
use App\Http\Controllers\PengurusanSijilController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RatingKursusController;

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
    // Papan Pemuka
    Route::get('papan-pemuka', [PageController::class, 'papanPemuka'])->name('papan-pemuka');

    // UserController
    Route::resource('users', UserController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::post('change-password/{id}', [UserController::class, 'changePassword'])->name('change-password');
    Route::get('pendaftaran-pengguna', [PageController::class, 'pendaftaranPengguna'])->name('pendaftaran-pengguna');
    Route::get('senarai-pengguna', [PageController::class, 'senaraiPengguna'])->name('senarai-pengguna');
    Route::get('ubah-pengguna/{id}', [PageController::class, 'ubahPengguna'])->name('ubah-pengguna');
    Route::get('ubah-kata-laluan/{id}', [PageController::class, 'ubahKataLaluan'])->name('ubah-kata-laluan');

    // KursusController
    //Route::resource('kursus', KursusController::class, ['only' => ['store', 'update', 'destroy', 'index']]);
    Route::get('kursus', [KursusController::class, 'index'])->name('index-kursus');
    Route::post('kursus', [KursusController::class, 'store'])->name('store-kursus');
    Route::post('update-kursus', [KursusController::class, 'updateKursus'])->name('update-kursus');
    Route::post('store-modul-kursus', [KursusController::class, 'storeModulKursus'])->name('store-modul-kursus');
    Route::post('store-program-kursus', [KursusController::class, 'storeProgramKursus'])->name('store-program-kursus');
    Route::post('store-praktikal-kursus', [KursusController::class, 'storePraktikalKursus'])->name('store-praktikal-kursus');
    Route::get('hantar-kursus/{kursus_id}', [KursusController::class, 'hantarKursus'])->name('hantar-kursus');
    Route::get('pendaftaran-kursus', [PageController::class, 'pendaftaranKursus'])->name('pendaftaran-kursus');
    Route::get('penjadualan-kursus', [PageController::class, 'penjadualanKursus'])->name('penjadualan-kursus');
    Route::get('jadual-kursus/{id}', [PageController::class, 'jadualKursus'])->name('jadual-kursus');
    Route::get('laporan-kursus', [PageController::class, 'laporanKursus'])->name('laporan-kursus');

    //RatingKursusController
    Route::get('rating-kursus/list-submodul/{id}', [RatingKursusController::class, 'listKursusSubmodul']);
    Route::get('rating-kursus/list-objektif/{id}', [RatingKursusController::class, 'listKursusObjektif']);
    Route::resource('rating-kursus', RatingKursusController::class, ['only' => ['index', 'store', 'update', 'destroy']]);

    // AsramaController
    Route::resource('asrama', AsramaController::class, ['only' => ['store', 'update']]);
    Route::get('/asrama/destroy/{id}', [AsramaController::class, 'destroy'])->name('asrama.destroy');

    Route::get('tempahan-dalaman', [AsramaController::class, 'tempahanDalaman'])->name('tempahan-dalaman');
    Route::get('pengurusan-bilik', [AsramaController::class, 'pengurusanBilik'])->name('pengurusan-bilik');
    Route::get('tempahan-kursus', [AsramaController::class, 'tempahankursus'])->name('tempahan-kursus');
    Route::get('jadual-bilik', [AsramaController::class, 'jadualBilik'])->name('jadual-bilik');

    // PenyelenggaranController
    Route::resource('penyelenggaraan', PenyelenggaraanController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('senarai-tugasan', [PenyelenggaraanController::class, 'senaraiTugasan'])->name('senarai-tugasan');
    Route::get('penugasan-penyelenggara', [PenyelenggaraanController::class, 'penugasanPenyelenggara'])->name('penugasan-penyelenggara');

    // TempahanController
    Route::resource('tempahan', TempahanController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('bilik-latihan', [TempahanController::class, 'bilikLatihan'])->name('bilik-latihan');
    Route::get('kenderaan', [TempahanController::class, 'kenderaan'])->name('kenderaan');
    Route::get('pengurusan-kenderaan', [TempahanController::class, 'kenderaan'])->name('pengurusan-kenderaan');
    Route::get('jadual-kenderaan', [TempahanController::class, 'kenderaan'])->name('jadual-kenderaan');
    Route::get('tempahan-1mtc', [TempahanController::class, 'tempahan1mtc'])->name('tempahan-1mtc');
    Route::get('tempahan-fasiliti', [TempahanController::class, 'tempahanFasiliti'])->name('tempahan-fasiliti');
    Route::get('tempahan-asrama', [TempahanController::class, 'tempahanAsrama'])->name('tempahan-asrama');
    Route::post('tempahan-asrama', [TempahanController::class, 'tempahanAsrama'])->name('tempahan-asram');
    Route::get('tempahan-asrama-destroy/{id}', [TempahanController::class, 'tempahanAsramaDestroy'])->name('tempahan-asrama-destroy');
    Route::get('tempahan-peralatan-ict', [PengurusanIctController::class, 'pengurusanIct'])->name('tempahan-peralatan-ict');

    // KewanganController
    Route::resource('kewangan', KewanganController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('kutipan', [KewanganController::class, 'kutipan'])->name('kutipan');
    Route::get('laporan-bayaran-kursus', [KewanganController::class, 'laporanBayaranKursus'])->name('laporan-bayaran-kursus');
    Route::get('laporan-bayaran-penceramah', [KewanganController::class, 'laporanBayaranPenceramah'])->name('laporan-bayaran-penceramah');

    // TODO
    Route::get('tetapan-sistem', [KewanganController::class, 'laporanBayaranPenceramah'])->name('tetapan-sistem');

    // AduanController
    Route::resource('aduan', AduanController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('aduan', [AduanController::class, 'aduan'])->name('aduan');

    // TempahanKenderaanController
    Route::resource('tempahan-kenderaan', TempahanKenderaanController::class, ['only' => ['store', 'update', 'destroy']]);

    // SenaraiKenderaanController
    Route::resource('senarai-kenderaan', SenaraiKenderaanController::class, ['only' => ['store', 'update', 'destroy']]);

    // SenaraiPemanduController
    Route::resource('senarai-pemandu', SenaraiPemanduController::class, ['only' => ['store', 'update', 'destroy']]);

    // SubmodulKursusController
    Route::resource('submodul-kursus', SubmodulKursusController::class, ['only' => ['store', 'update', 'destroy']]);

    // ObjektifKursusController
    Route::resource('objektif-kursus', ObjektifKursusController::class, ['only' => ['store', 'update', 'destroy']]);

    // PenceramahController
    Route::resource('penceramah', PenceramahController::class, ['only' => ['store', 'update', 'destroy']]);

    Route::get('profil-penceramah', [PenceramahController::class, 'profilPenceramah'])->name('profil-penceramah');
    Route::resource('rating-penceramah', RatingPenceramahController::class, ['only' => ['index', 'store', 'update', 'destroy']]);
    Route::get('rating-penceramah/list-program/{kluster}', [RatingPenceramahController::class, 'listProgramByKluster']);
    Route::get('rating-penceramah/list-penceramah/{program}', [RatingPenceramahController::class, 'listPenceramahByProgram']);
    Route::get('rating-penceramah/list-submodul/{penceramah}/{kursusId}', [RatingPenceramahController::class, 'listPenceramahSubModulsByKursus']);

    Route::get('kredit-penceramah', [PenceramahController::class, 'kreditPenceramah'])->name('kredit-penceramah');
    Route::post('credit-penceramah-update', [PenceramahController::class, 'creditPenceramahUpdate'])->name('credit-penceramah-update');

    // PengurusanICTController
    Route::resource('pengurusanict', PengurusanIctController::class, ['only' => ['store', 'update', 'destroy', 'index']]);
    Route::get('pengurusan-ict', [PengurusanIctController::class, 'pengurusanIct'])->name('pengurusan-ict');

    // PengurusanSijilController
    Route::resource('pengurusan-sijil', PengurusanSijilController::class, ['only' => ['store', 'update', 'destroy']]);
    Route::get('pengurusan-maklumat-sijil', [PengurusanSijilController::class, 'pengurusanMaklumatSijil'])->name('pengurusan-maklumat-sijil');
    Route::get('cetak-sijil', [PengurusanSijilController::class, 'cetakSijil'])->name('cetak-sijil');
    Route::get('pesertas', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('peserta/destroy/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');
    Route::get('peserta/{id}', [PesertaController::class, 'edit'])->name('peserta.edit');
    Route::post('peserta/{id}', [PesertaController::class, 'update'])->name('peserta.update');
});

Route::get('peserta', [PesertaController::class, 'create'])->name('peserta.create');
Route::post('peserta', [PesertaController::class, 'store']);
