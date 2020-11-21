<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mahasiswa\Perwaliancontroller;
use App\Http\Controllers\Mahasiswa\KhsController;
use App\Http\Controllers\Mahasiswa\KrsController;
use App\Http\Controllers\Mahasiswa\NilaisementaraController;
use App\Http\Controllers\Mahasiswa\PerubahanController;

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


Route::get('/', function () {
    return view('mahasiswa.dashboard');
});

Route::get('/perwalian', [Perwaliancontroller::class, 'index']);

Route::get('/khs', [KhsController::class, 'index']);

Route::get('/krs', [KrsController::class, 'index']);

Route::get('/nilaisementara', [NilaisementaraController::class, 'index']);

Route::get('/perubahan', [PerubahanController::class, 'index']);
