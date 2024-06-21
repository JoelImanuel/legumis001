<x-template>
<main>
    <form action="{{ route('keranjang.store') }}" method="POST" style="margin-top:40px;">
        @csrf
        <p>Nama Keranjang</p>
        <select name="nama_keranjang" id="nama_keranjang" style="width:100%; height:40px;">
            <option value="Nasi Kuning">Nasi Kuning</option>
        </select>
        <p>Nama Pelanggan</p>
        <input type="text" name="nama_pelanggan" id="nama_pelanggan" style="width:100%; height:40px;">
        <p>Jumlah</p>
        <input type="number" name="jumlah_keranjang" id="jumlah_keranjang" style="width:100%; height:40px;">
        <p>Metode Pembelian</p>
        <select name="metode_pembelian" id="metode_pembelian" style="width:100%; height:40px;">
            <option value="DANA">DANA</option>
            <option value="Cash">Cash</option>
        </select>
        <button>Submit</button>
    </form>
 </main>
</x-template>
