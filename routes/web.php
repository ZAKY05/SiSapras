<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\StokbarangController;

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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login ', [LoginController::class, 'authenticate']);
Route::get('/', [DashboardController::class, 'index']);

Route::get('/daftar-barang', [BarangController::class, 'index']);
Route::get('/nama-peminjam', [PeminjamController::class, 'index'])->name('nama-peminjam');
Route::get('/deletePeminjaman/{id}', [PeminjamController::class, 'delete']); 
Route::get('/history', [HistoriController::class, 'index']);
Route::get('/deleteBarang/{id}', [BarangController::class, 'delete']);
// Route::delete('/nama-peminjam/delete/{id}',[PeminjamController::class,'delete']);
// Route::get('/daftar-barang', [BarangController::class, 'index']);

Route::post("/barang/store", [PeminjamController::class, 'store']);
Route::post("/barang/store2", [BarangController::class, 'store2']);

Route::get('/kategori-barang', [KategoriController::class, 'index']);
Route::get('/stok-barang', [StokbarangController::class, 'login']);

Route::get('/tampildata2/{id_barang}', [BarangController::class, 'tampildata2']);
Route::post('/update2/{id_barang}', [BarangController::class, 'updatedata2']);

Route::get('/tampildata/{id}', [PeminjamController::class, 'tampildata']);
Route::post('/update/{id}', [PeminjamController::class, 'updatedata']);

route::post('/simpanData/{id}', [HistoriController::class, 'simpandata']);
// Route::post('/login/auth', [LoginController::class, 'index']);


// Route::get('/register', function () {
//     return view('auth.register');
// });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
