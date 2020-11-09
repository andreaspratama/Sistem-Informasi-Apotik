<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\SatuanController;
use App\Http\Controllers\Admin\SuplaierController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Admin\ObatMasukController;
use App\Http\Controllers\Admin\PenjualanController;

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
    return view('auth.login');
});

Route::prefix('admin')
    ->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth', 'checkRole:admin');
    Route::group(['middleware' => ['auth', 'checkRole:admin']], function() {
        Route::get('/cetakObatMasukForm', [ObatMasukController::class, 'cetakForm'])->name('cetakForm');
        Route::get('/cetakDataPertanggal/{tglawal}/{tglakhir}', [ObatMasukController::class, 'cetakObatMasukPertanggal'])->name('cetakDataPertanggal');
        Route::resources([
            'kategori' => KategoriController::class,
            'satuan' => SatuanController::class,
            'suplaier' => SuplaierController::class,
            'obat' => ObatController::class,
            'obatmasuk' => ObatMasukController::class,
            ]);
        });
    });
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth', 'checkRole:kasir');
    Route::resource('penjualan', PenjualanController::class)->middleware('auth', 'checkRole:kasir');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
