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

// Route::get('/admin', function () {
    //     return view('BackPage.dataKomiku');
    // });

// Route::get('/user', function () {
    //     return view('FrontPage.landingpage');
    // });

// Route::middleware(['role:admin'])->group(function () {
//     Route::get('/admin', [KomikuController::class, 'index'])->name('data komiku');
//     Route::get('/datauser', [KomikuController::class, 'index2'])->name('data user');
//     Route::get('/datatransaksi', [KomikuController::class, 'index3'])->name('data transaksi');
// });

// Route::middleware(['role:user'])->group(function () {
//     Route::get('/komikuproduk', [HomeController::class, 'page2'])->name('komiku produk');
//     Route::get('/detailkomiku', [HomeController::class, 'page3'])->name('detail komiku');
//     Route::get('/keranjang', [HomeController::class, 'page4'])->name('keranjang');
//     Route::get('/transaksi', [HomeController::class, 'page5'])->name('transaksi');
// });

// Route::get('/admin', [KomikuController::class, 'index'])->name('data komiku');
// Route::get('/datauser', [KomikuController::class, 'index2'])->name('data user');
// Route::get('/datatransaksi', [KomikuController::class, 'index3'])->name('data transaksi');
// Route::get('/dataKomiku', [KomikuController::class, 'index'])->name('BackPage.index');
// Route::get('/tambahKomik', [KomikuController::class, 'create'])->name('BackPage.create');
// Route::post('/tambahKomik', [KomikuController::class, 'store'])->name('BackPage.store');
// Route::get('/editKomik/{id}', [KomikuController::class, 'edit'])->name('BackPage.edit');
// Route::post('/hapusKomik/{id}', [KomikuController::class, 'edit'])->name('BackPage.destroy');
// Route::get('/tambahUser', [UserController::class, 'create'])->name('tambah user');

// Route::group(['middleware' => 'auth:sanctum'], function(){
//     Route::resource('komiku', KomikuController::class);
// });

Route::get('/landing', [HomeController::class, 'index'])->name('landing');
Route::get('/komikuproduk', [HomeController::class, 'page2'])->name('komiku produk');
Route::get('/detailkomiku', [HomeController::class, 'page3'])->name('detail komiku');
Route::get('/keranjang', [HomeController::class, 'page4'])->name('keranjang');
Route::get('/transaksi', [HomeController::class, 'page5'])->name('transaksi');

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::resource('admin', KomikuController::class);
    Route::put('admin/{id}/edit', [KomikuController::class, 'update'])->name('admin.update');
    Route::get('komiku/{id}', [KomikuController::class, 'komiku'])->name('admin.index');
    Route::get('/admin', [KomikuController::class, 'index'])->name('data komiku');
    Route::get('/datapesanan', [PesananController::class, 'index'])->name('data pesanan');
    Route::get('/datatransaksi', [KomikuController::class, 'index3'])->name('data transaksi');
    Route::get('/dataKomiku', [KomikuController::class, 'index'])->name('admin.index');

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
