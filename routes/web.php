<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;

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

Route::get('layout.main', function () {
    return view('layout.main');
});

Route::resource('karyawan', KaryawanController::class);
Route::resource('jabatan', JabatanController::class);
Route::resource('divisi', DivisiController::class);
Route::resource('absen', AbsenController::class);
Route::resource('rekap', RekapController::class);
