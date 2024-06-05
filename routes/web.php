<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\AuthController;
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
    return view('index');
});

Route::get('/login', [AuthController::class, 'index']);

Route::get('customer', function () {
    return view('customer');
});
Route::get('analisa', function () {
    return view('analisa');
});
Route::get('pengiriman', function () {
    return view('pengiriman');
});
Route::get('transaksi', function () {
    return view('transaksi');
});
Route::resource('produk', ProdukController::class);

