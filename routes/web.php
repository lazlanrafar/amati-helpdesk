<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ChangePasswordController;

use App\Http\Controllers\Aset\APController;
use App\Http\Controllers\Aset\HardwareController;
use App\Http\Controllers\Aset\SwitchController;

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


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/changepass', ChangePasswordController::class)->middleware('auth');

Route::resource('/', DashboardController::class)->middleware('auth');

Route::resource('/aset/ap', APController::class)->middleware('auth');
Route::resource('/aset/hardware', HardwareController::class)->middleware('auth');
Route::resource('/aset/switch', SwitchController::class)->middleware('auth');

Route::resource('/ssid', SSIDController::class)->middleware('auth');
Route::resource('/link', LinkController::class)->middleware('auth');
Route::resource('/riwayat', RiwayatController::class)->middleware('auth');
Route::resource('/lokasi', LokasiController::class)->middleware('auth');
Route::resource('/brand', BrandController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');

Route::get('/laporan', [LaporanController::class, 'index'])->middleware('auth');
Route::post('/laporan', [LaporanController::class, 'filter'])->middleware('auth');
