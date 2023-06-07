<?php

use App\Http\Controllers\BackEnd\Auth\AuthController;
use App\Http\Controllers\BAckEnd\CekIn\CekInController;
use App\Http\Controllers\BAckEnd\Laporan\LaporanController;
use App\Http\Controllers\BackEnd\Pemesan\PemesanController;
use App\Http\Controllers\FrontEnd\Pemesanan\PemesananController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PemesananController::class, 'index'])->name('pemesan');
Route::post('/', [PemesananController::class, 'tambah'])->name('tambah_pesanan');
Route::get('/kode', [PemesananController::class, 'kode'])->name('kode_pesanan');

//login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'autenticate'])->name('autenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::prefix('pemesan')->group(function () {
    route::get('/', [PemesanController::class, 'index'])->name('admin.pemesan')->middleware('auth');
    route::get('/edit/{id}', [PemesanController::class, 'edit'])->name('edit.pemesan')->middleware('auth');
    route::put('/update/{id}', [PemesanController::class, 'update'])->name('update.pemesan')->middleware('auth');
    route::get('/hapus/{id}', [PemesanController::class, 'delete'])->name('hapus.pemesan')->middleware('auth');
});

Route::prefix('cek-in')->group(function () {
    route::get('/', [CekInController::class, 'index'])->name('admin.cek-in')->middleware('auth');
    route::post('/', [CekInController::class, 'store'])->name('store.cek-in')->middleware('auth');
    route::get('/detail/{kode}', [CekInController::class, 'detail'])->name('detail.cek-in')->middleware('auth');
    // route::put('/update/{id}', [PemesanController::class, 'update'])->name('update.pemesan');
    // route::get('/hapus/{id}', [PemesanController::class, 'delete'])->name('hapus.pemesan');
});

Route::prefix('laporan')->group(function () {
    route::get('/', [LaporanController::class, 'index'])->name('admin.laporan')->middleware('auth');
});
