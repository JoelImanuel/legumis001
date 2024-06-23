<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\KeranjangController;
use App\Models\Histori;
use App\Models\Keranjang;
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

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(["middleware" => "auth:web"], function() {
    Route::get('/dashboard', function () {
        $total_pesanan = Histori::sum('jumlah_keranjang');
        $total_harga_total = Histori::sum('harga_total');
        $total_pelanggan = Histori::distinct('nama_pelanggan')->count('nama_pelanggan');

        return view('index', [
            'total_pesanan'=>$total_pesanan,
            'total_harga_total'=>$total_harga_total,
            'total_pelanggan'=>$total_pelanggan
        ]);
    })->name("dashboard");

    Route::get('analisa', function () {
        return view('analisa');
    });
    Route::get('pengiriman', function () {
        return view('pengiriman');
    });
    Route::get('transaksi', function () {
        return view('transaksi');
    });
    Route::resource('keranjang', KeranjangController::class);
    Route::resource('produk', ProdukController::class);
    Route::delete('histori/{keranjang}', function(Keranjang $keranjang){
        Histori::create([
            'nama_pelanggan'=> request('nama_pelanggan'),
            'nama_keranjang'=> request('nama_keranjang'),
            'jumlah_keranjang' => request('jumlah_keranjang'),
            'harga_total'=> request('harga_total'),
        ]);

        $keranjang->delete();
        return redirect('keranjang');
    })->name('histori.delete');;
});

