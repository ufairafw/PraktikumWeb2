<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});

// Bikin routing untuk dashboard pake controller
Route::get('/dashboard', [DashboardController::class, 'index']);
// Bikin routing untuk produk pake controller
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/kategori_produk', [KategoriController::class, 'index'])->name('kategori_produk');
// Bikin routing untuk create
Route::get('/produk/create', [ProdukController::class, 'create']);
// Bikin routing untuk kirim data menggunakan store
Route::post('/produk/store', [ProdukController::class, 'store']);
// Bikin routing edit
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
// Bikin routing untuk edit data menggunakan update
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
// Bikin routing untuk delete data menggunakan destroy
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);