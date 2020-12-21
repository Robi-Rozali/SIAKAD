<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\RuangController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\AdminnController;
use App\Http\Controllers\Admin\KeuController;

use App\Http\Controllers\LoginController;

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
use App\Http\Controllers\Mahasiswa\MhsController;

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
Route::resource('/prodii', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::post('/mahasiswa/import/csv', [MahasiswaController::class, 'importcsv']);
Route::get('/mahasiswa/export/csv', [MahasiswaController::class, 'exportcsv']);
Route::get('/mahasiswa/cetak/pdf', [MahasiswaController::class, 'cetak']);
Route::resource('/ruang', RuangController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/adminn', AdminnController::class);
Route::resource('/keu', KeuController::class);

//Prodi
Route::get('/prodi', [JurusanController::class, 'index']);
Route::get('/nilai', [NilaiController::class, 'index']);
Route::get('/khsadm/{id}', [KhsadmController::class, 'cari']);
Route::post('/khsadm/cetak/pdf', [KhsadmController::class, 'cetak']);

Route::resource('/inputjadwal', InputjadwalController::class);
Route::get('/inputjadwal/{prodi}/{smtr}/{tahun}', [InputjadwalController::class, 'matkul']);
Route::get('/inputjadwal/detail/{id}', [InputjadwalController::class, 'detail']);

Route::get('/khsadm', [KhsadmController::class, 'index']);
Route::get('/perwalianadm', [PerwalianadmController::class, 'index']);
Route::get('/perwalianadm/{prodi}/{smtr}/{tahun}', [PerwalianadmController::class, 'matakuliah']);
Route::resource('/kurikulum', KurikulumController::class);
Route::post('/kurikulum/import/csv', [KurikulumController::class, 'importcsv']);

Route::get('/kurikulum/export/csv', [KurikulumController::class, 'exportcsv']);

// Dosen
Route::resource('/dosen', DosenController::class);

//Keuangan
Route::get('/keuangan', [KeuanganController::class, 'index']);
Route::get('/keuangan', [DashboardController::class, 'index']);
Route::resource('/biaya', BiayaController::class);
Route::resource('/pembayarankeu', PembayarankeuController::class);

//Mahasiswa
Route::get('/mhs', [MhsController::class, 'index']);
// Route::get('/', function () {
//     return view('mahasiswa.dashboard');
// });

Route::get('/perwalian', [Perwaliancontroller::class, 'index']);

Route::get('/khs', [KhsController::class, 'index']);
Route::get('/khs/{tahun}/{nim}', [KhsController::class, 'nilai']);

Route::get('/krs', [KrsController::class, 'index']);

Route::get('/nilaisementara', [NilaisementaraController::class, 'index']);
Route::post('/nilaisementara/cetaknilai/pdf', [NilaisementaraController::class, 'cetaknilai']);

Route::get('/perubahan', [PerubahanController::class, 'index']);

Route::get('/pilihkelas', [PilihkelasController::class, 'index']);

Route::get('/jadwalkuliah', [JadwalkuliahController::class, 'index']);

Route::get('/jadwalujian', [JadwalujianController::class, 'index']);

Route::get('/pembayaran', [PembayaranController::class, 'index']);

Route::resource('/profil', ProfilController::class);

//menu
Route::get('/', function () {
    return view('/');
});

Route::get('/index', [LoginController::class, 'index'])->middleware('guest:mahasiswa','guest:prodi','guest:admin','guest:keuangan')->name('login');