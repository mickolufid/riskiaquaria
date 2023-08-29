<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::resource('/dashboard/pricelist', App\Http\Controllers\PricelistController::class);
Route::resource('/dashboard/stock', App\Http\Controllers\StockController::class);
Route::resource('/dashboard/supplier', App\Http\Controllers\SupplierController::class);
Route::resource('/dashboard', App\Http\Controllers\DashboardController::class);
