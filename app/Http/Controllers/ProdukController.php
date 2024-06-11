<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bahan;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahans = Bahan::all();
        return view('produk', [
            'bahans' => $bahans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        Bahan::create([
            'nama'=>request('nama'),
            'harga'=>request('harga')
        ]);

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bahan $bahan)
    {
        dd($bahan);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bahan $bahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Bahan $bahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bahan $bahan)
    {
        $bahan->delete();
        return redirect('produk');
    }
}
