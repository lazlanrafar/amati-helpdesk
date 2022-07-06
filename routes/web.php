<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SSIDController;
use App\Http\Controllers\UserController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/aset', [AsetController::class, 'index'])->name('aset');

Route::get('/ssid', [SSIDController::class, 'index'])->name('ssid');

Route::get('/link', [LinkController::class, 'index'])->name('link');

Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');


Route::resource('/lokasi', LokasiController::class);
Route::resource('/brand', BrandController::class);
Route::resource('/user', UserController::class);
