<?php

use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\HomeController as Home;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth']], function () {
    Route::get(
        '/',
        [DashboardController::class, 'index']
    )
    Route::resource('kategori', CategoriesController::class);
    Route::resource('barang', ItemController::class);
    Route::resource('merek', MerkController::class);
    Route::resource('profil', ProfileController::class);
    Route::resource('supplier', SupplierController::class);
    Route::get(
        'laporan/barang',
        [ItemController::class, 'report']
    )->name('laporan.barang');
    