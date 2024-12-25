<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KomikuController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/landing', [HomeController::class, 'index'])->name('landing');
Route::get('/komikuproduk', [HomeController::class, 'page2'])->name('komiku produk');
Route::get('/detailkomiku', [HomeController::class, 'page3'])->name('detail komiku');
Route::get('/keranjang', [HomeController::class, 'page4'])->name('keranjang');
Route::get('/transaksi', [HomeController::class, 'page5'])->name('transaksi');

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::resource('admin', KomikuController::class);
    Route::get('/datakomik', [KomikuController::class, 'index'])->name('admin.index');
    Route::get('datakomik/{id}/edit', [KomikuController::class, 'edit'])->name('admin.edit');
    Route::get('/datatransaksi', [KomikuController::class, 'index3'])->name('admin.index3');
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::resource('admin2', PesananController::class);
    Route::get('/datapesanan', [PesananController::class, 'index'])->name('admin2.index');
    Route::get('datapesanan/{id}/edit', [PesananController::class, 'edit'])->name('admin2.edit');
    Route::get('datapesanan/komik/{id}', [PesananController::class, 'komik'])->name('pesanans.komik');
    Route::get('datapesanan/transaksi/{id}', [PesananController::class, 'transaksi'])->name('pesanans.transaksi');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
