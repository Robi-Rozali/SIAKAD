<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\RuangController;


//Keuangan
use App\Http\Controllers\Keuangan\KeuanganController;
use App\Http\Controllers\Keuangan\DashboardController;
use App\Http\Controllers\Keuangan\BiayaController;
use App\Http\Controllers\Keuangan\PembayarankeuController;

//mahasiswa

use App\Http\Controllers\Mahasiswa\Perwaliancontroller;
use App\Http\Controllers\Mahasiswa\KhsController;
use App\Http\Controllers\Mahasiswa\KrsController;
use App\Http\Controllers\Mahasiswa\NilaisementaraController;
use App\Http\Controllers\Mahasiswa\PerubahanController;
use App\Http\Controllers\Mahasiswa\PilihkelasController;
use App\Http\Controllers\Mahasiswa\JadwalkuliahController;
use App\Http\Controllers\Mahasiswa\JadwalujianController;
use App\Http\Controllers\Mahasiswa\PembayaranController;
use App\Http\Controllers\Mahasiswa\ProfilController;

//Prodi
use App\Http\Controllers\Prodi\JurusanController;
use App\Http\Controllers\Prodi\NilaiController;
use App\Http\Controllers\Prodi\InputjadwalController;
use App\Http\Controllers\Prodi\KhsadmController;
use App\Http\Controllers\Prodi\PerwalianadmController;
use App\Http\Controllers\Prodi\KurikulumController;

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

// Admin
Route::get('/adm', [AdminController::class, 'index']);
Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/ruang', RuangController::class);

//Prodi
Route::get('/prodi', [JurusanController::class, 'index']);
Route::get('/nilai', [NilaiController::class, 'index']);
Route::get('/inputjadwal', [InputjadwalController::class, 'index']);
Route::get('/khsadm', [KhsadmController::class, 'index']);
Route::get('/perwalianadm', [PerwalianadmController::class, 'index']);
Route::resource('/kurikulum', KurikulumController::class);

// Dosen
Route::resource('/dosen', DosenController::class);

//Keuangan
Route::get('/keuangan', [KeuanganController::class, 'index']);
Route::get('/keuangan', [DashboardController::class, 'index']);
Route::resource('/biaya', BiayaController::class);
Route::resource('/pembayarankeu', PembayarankeuController::class);

//Mahasiswa
Route::get('/', function () {
    return view('mahasiswa.dashboard');
});

Route::get('/perwalian', [Perwaliancontroller::class, 'index']);

Route::get('/khs', [KhsController::class, 'index']);

Route::get('/krs', [KrsController::class, 'index']);

Route::get('/nilaisementara', [NilaisementaraController::class, 'index']);

Route::get('/perubahan', [PerubahanController::class, 'index']);

Route::get('/pilihkelas', [PilihkelasController::class, 'index']);

Route::get('/jadwalkuliah', [JadwalkuliahController::class, 'index']);

Route::get('/jadwalujian', [JadwalujianController::class, 'index']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);

Route::resource('/profil', ProfilController::class);
