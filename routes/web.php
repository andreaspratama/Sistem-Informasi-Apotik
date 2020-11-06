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
    return view('welcome');
});

Route::prefix('admin')
    ->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resources([
        'kategori' => KategoriController::class,
        'satuan' => SatuanController::class,
        'suplaier' => SuplaierController::class,
        'obat' => ObatController::class,
        'obatmasuk' => ObatMasukController::class,
        'penjualan' => PenjualanController::class,
    ]);
});
