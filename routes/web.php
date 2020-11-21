<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mahasiswa\Perwaliancontroller;
use App\Http\Controllers\Mahasiswa\KhsController;

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
