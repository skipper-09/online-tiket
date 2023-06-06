<?php

use App\Http\Controllers\BackEnd\Auth\AuthController;
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


route::get('/', [PemesananController::class, 'index'])->name('pemesan');
route::post('/', [PemesananController::class, 'tambah'])->name('tambah_pesanan');
route::get('/kode', [PemesananController::class, 'kode'])->name('kode_pesanan');

//login
route::get('/login', [AuthController::class, 'index'])->name('login');
route::post('/login', [AuthController::class, 'autenticate'])->name('autenticate.login');


Route::prefix('pemesan')->group(function () {
    route::get('/', [PemesanController::class, 'index'])->name('admin.pemesan');
    route::get('/edit/{id}', [PemesanController::class, 'edit'])->name('edit.pemesan');
    route::put('/update/{id}', [PemesanController::class, 'update'])->name('update.pemesan');
    route::get('/hapus/{id}', [PemesanController::class, 'delete'])->name('hapus.pemesan');
});
