<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mahasiswa\Perwaliancontroller;
use App\Http\Controllers\Mahasiswa\KhsController;
use App\Http\Controllers\Mahasiswa\KrsController;
use App\Http\Controllers\Mahasiswa\NilaisementaraController;
use App\Http\Controllers\Mahasiswa\PerubahanController;
<<<<<<< HEAD
use App\Http\Controllers\Mahasiswa\PilihkelasController;
use App\Http\Controllers\Mahasiswa\JadwalkuliahController;
use App\Http\Controllers\Mahasiswa\JadwalujianController;
use App\Http\Controllers\Mahasiswa\PembayaranController;

=======
>>>>>>> 6884d5d2dea31e67d0ad6ca5395814e4cdd644ef

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

Route::get('/', function () {
    return view('mahasiswa.dashboard');
});

Route::get('/perwalian', [Perwaliancontroller::class, 'index']);

Route::get('/khs', [KhsController::class, 'index']);

Route::get('/krs', [KrsController::class, 'index']);

Route::get('/nilaisementara', [NilaisementaraController::class, 'index']);

Route::get('/perubahan', [PerubahanController::class, 'index']);
<<<<<<< HEAD

Route::get('/pilihkelas', [PilihkelasController::class, 'index']);

Route::get('/jadwalkuliah', [JadwalkuliahController::class, 'index']);

Route::get('/jadwalujian', [JadwalujianController::class, 'index']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);
=======
>>>>>>> 6884d5d2dea31e67d0ad6ca5395814e4cdd644ef
