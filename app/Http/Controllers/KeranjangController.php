<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjangs = Keranjang::all();
        return view('customer', [
            'keranjangs' => $keranjangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahkeranjang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Keranjang::create([
            // 'id_pelanggan'=>'1',
            // 'id_keranjang'=>'1',
            'nama_pelanggan'=> request('nama_pelanggan'),
            'nama_keranjang'=> request('nama_keranjang'),
            'jumlah_keranjang' => request('jumlah_keranjang'),
            'total_harga_keranjang'=> request('jumlah_keranjang') * 12000,
            'metode_pembelian'=> request('metode_pembelian')
        ]);

        return redirect('keranjang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
