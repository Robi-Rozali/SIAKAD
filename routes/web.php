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
use App\Http\Controllers\Prodi\PilihkelasprodiController;

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
Route::get('/adm', [AdminController::class, 'index'])->middleware('auth:admin');
Route::resource('/prodii', ProdiController::class)->middleware('auth:admin');
Route::resource('/mahasiswa', MahasiswaController::class)->middleware('auth:admin');
Route::post('/mahasiswa/import/csv', [MahasiswaController::class, 'importcsv'])->middleware('auth:admin');
Route::get('/mahasiswa/export/csv', [MahasiswaController::class, 'exportcsv'])->middleware('auth:admin');
Route::get('/mahasiswa/cetak/pdf', [MahasiswaController::class, 'cetak'])->middleware('auth:admin');
Route::resource('/ruang', RuangController::class)->middleware('auth:admin');
Route::resource('/kelas', KelasController::class)->middleware('auth:admin');
Route::resource('/adminn', AdminnController::class)->middleware('auth:admin');
Route::resource('/keu', KeuController::class)->middleware('auth:admin');





//Prodi
Route::get('/disposisi/{nim}', [PerwalianadmController::class,'disposisi'])->middleware('auth:prodi');
Route::get('/prodi', [JurusanController::class, 'index'])->middleware('auth:prodi');
Route::resource('/nilai', NilaiController::class)->middleware('auth:prodi');
Route::get('/datanilai/{nim}', [NilaiController::class, 'carimhs'])->middleware('auth:prodi');
Route::get('/datanilai/{semester}/{nim}', [NilaiController::class, 'nilai'])->middleware('auth:prodi');
Route::get('/editnilai/{kode}', [NilaiController::class, 'nilaimhs'])->middleware('auth:prodi');
Route::post('/editnilai/', [NilaiController::class, 'update'])->middleware('auth:prodi');
Route::get('/tambahnilai/{nim}', [NilaiController::class, 'tambahmhs'])->middleware('auth:prodi');
Route::get('/tambahkode/{kode}', [NilaiController::class, 'Tambahmatkul'])->middleware('auth:prodi');
Route::get('/khsadm/{id}', [KhsadmController::class, 'cari'])->middleware('auth:prodi');
Route::post('/khsadm/cetak/pdf', [KhsadmController::class, 'cetak'])->middleware('auth:prodi');
Route::get('/data/{semester}/{nim}', [KhsadmController::class, 'nilai'])->middleware('auth:prodi');
Route::resource('/inputjadwal', InputjadwalController::class)->middleware('auth:prodi');
Route::get('/inputjadwal/{prodi}/{smtr}/{tahun}', [InputjadwalController::class, 'matkul'])->middleware('auth:prodi');
Route::get('/inputjadwal/detail/{id}', [InputjadwalController::class, 'detail'])->middleware('auth:prodi');
Route::get('/khsadm', [KhsadmController::class, 'index']);

Route::resource('/perwalianadm', PerwalianadmController::class)->middleware('auth:prodi');
Route::get('/perwalianadm/{prodi}/{smtr}/{tahun}', [PerwalianadmController::class, 'matakuliah'])->middleware('auth:prodi');

Route::resource('/kurikulum', KurikulumController::class)->middleware('auth:prodi');
Route::post('/kurikulum/import/csv', [KurikulumController::class, 'importcsv'])->middleware('auth:prodi');
Route::get('/kurikulum/export/csv', [KurikulumController::class, 'exportcsv'])->middleware('auth:prodi');
Route::post('/nilai/import/csv', [NilaiController::class, 'importcsv'])->middleware('auth:prodi');
Route::get('/exportnilai', [NilaiController::class, 'exportcsv'])->middleware('auth:prodi');

Route::resource('/pilihkelasprodi', PilihkelasprodiController::class)->middleware('auth:prodi');
Route::get('/anjay/{nim}', [PilihkelasprodiController::class,'pilihkelasprodi'])->middleware('auth:prodi');





// Dosen
Route::resource('/dosen', DosenController::class)->middleware('auth:admin');






//Keuangan
Route::get('/keuangan', [KeuanganController::class, 'index'])->middleware('auth:keuangan');
Route::get('/keuangan', [DashboardController::class, 'index'])->middleware('auth:keuangan');
Route::resource('/biaya', BiayaController::class)->middleware('auth:keuangan');
Route::resource('/pembayarankeu', PembayarankeuController::class)->middleware('auth:keuangan');














//Mahasiswa
Route::get('/mhs', [MhsController::class, 'index'])->middleware('auth:mahasiswa');

Route::get('/perwalian', [Perwaliancontroller::class, 'index'])->middleware('auth:mahasiswa');
Route::post('/perwalian', [Perwaliancontroller::class, 'store'])->middleware('auth:mahasiswa');

Route::get('/khs', [KhsController::class, 'index'])->middleware('auth:mahasiswa');
Route::get('/khs/{tahun}/{nim}', [KhsController::class, 'nilai'])->middleware('auth:mahasiswa');

Route::get('/krs', [KrsController::class, 'index'])->middleware('auth:mahasiswa');
Route::get('/krs/{tahun}/{nim}', [KrsController::class, 'krs'])->middleware('auth:mahasiswa');
Route::post('/krs/cetakkrs/pdf', [KrsController::class, 'cetakkrs'])->middleware('auth:mahasiswa');

Route::get('/nilaisementara', [NilaisementaraController::class, 'index'])->middleware('auth:mahasiswa');
Route::post('/nilaisementara/cetaknilai/pdf', [NilaisementaraController::class, 'cetaknilai'])->middleware('auth:mahasiswa');

Route::get('/perubahan', [PerubahanController::class, 'index'])->middleware('auth:mahasiswa');
Route::post('/perubahan', [PerubahanController::class, 'store'])->middleware('auth:mahasiswa');

Route::get('/pilihkelas', [PilihkelasController::class, 'index'])->middleware('auth:mahasiswa');
Route::post('/pilihkelas', [PilihkelasController::class, 'store'])->middleware('auth:mahasiswa');

Route::get('/jadwalkuliah', [JadwalkuliahController::class, 'index'])->middleware('auth:mahasiswa');

Route::get('/jadwalujian', [JadwalujianController::class, 'index'])->middleware('auth:mahasiswa');

Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware('auth:mahasiswa');
Route::get('/pembayaran/{semester}/{nim}', [PembayaranController::class, 'bayar'])->middleware('auth:mahasiswa');

Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth:mahasiswa');

Route::resource('/profil', ProfilController::class,)->middleware('auth:mahasiswa');
















// ora ora ora ora ora
Route::get('/', [LoginController::class, 'index'])->middleware('guest:mahasiswa','guest:prodi','guest:admin','guest:keuangan')->name('login');

Route::post('/', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);