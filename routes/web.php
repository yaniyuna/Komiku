<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KomikuController;
use App\Http\Controllers\ProfileController;
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

Route::get('/admin', [KomikuController::class, 'index'])->name('data komiku');
Route::get('/datauser', [KomikuController::class, 'index2'])->name('data user');
Route::get('/datatransaksi', [KomikuController::class, 'index3'])->name('data transaksi');
Route::get('/tambahKomik', [KomikuController::class, 'create'])->name('tambah komik');



Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/komikuproduk', [HomeController::class, 'page2'])->name('komiku produk');
Route::get('/detailkomiku', [HomeController::class, 'page3'])->name('detail komiku');
Route::get('/keranjang', [HomeController::class, 'page4'])->name('keranjang');
Route::get('/transaksi', [HomeController::class, 'page5'])->name('transaksi');

// Route::group(['middleware' => 'auth:sanctum'], function(){
//     Route::resource('komiku', KomikuController::class);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
