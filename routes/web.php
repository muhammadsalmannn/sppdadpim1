<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PerjalananController;
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
    return view('pages');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Data Dasar
    Route::get('/surat/cetak/{surat}', [SuratController::class, 'cetakSurat'])->name('surat.cetak');

    Route::resource('/pegawai', PegawaiController::class);
    Route::resource('/perjalanan', PerjalananController::class);
    Route::resource('/surat', SuratController::class);

    // Data Tambahan
    Route::resource('/jabatan', JabatanController::class)->except('show');
    Route::resource('/kendaraan', KendaraanController::class)->except('show');
    Route::resource('/pangkat', PangkatController::class)->except('show');
});