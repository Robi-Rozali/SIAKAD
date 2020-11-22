<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\Admin\InputjadwalController;
use App\Http\Controllers\Admin\KhsadmController;
use App\Http\Controllers\Admin\PerwalianadmController;
use App\Http\Controllers\Admin\KurikulumController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\MahasiswaController;


//Keuangan
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
Route::get('/kurikulum', [KurikulumController::class, 'index']);
Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);

//Prodi
Route::get('/nilai', [NilaiController::class, 'index']);
Route::get('/inputjadwal', [InputjadwalController::class, 'index']);
Route::get('/khsadm', [KhsadmController::class, 'index']);
Route::get('/perwalianadm', [PerwalianadmController::class, 'index']);

// Dosen
Route::resource('/dosen', DosenController::class);

//Keuangan
Route::get('/biaya', [BiayaController::class, 'index']);
Route::get('/Pembayarankeu', [PembayarankeuController::class, 'index']);

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

Route::get('/profil', [ProfilController::class, 'index']);
