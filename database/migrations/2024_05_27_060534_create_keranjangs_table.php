<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id('id_keranjang');
            $table->string('nama_pelanggan');
            $table->string('nama_keranjang');
            $table->integer('jumlah_keranjang')->unsigned();
            $table->integer('total_harga_keranjang')->unsigned();
            $table->string('metode_pembelian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
