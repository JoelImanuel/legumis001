<x-template>
<main>
    <button onclick="window.location.href='keranjang/create'">Tambah</button>
    <div class="customer-pad">
        {{-- <button class="customer-box accordion thumbnail">
            <div>Stanley Phangkawira</div>
            <div>+</div>
        </button>
        <div class="panel">
            <div class="in-panel">
                <div>
                    <strong>Nasi Kuning Ayam</strong> <br>
                    Akan dibayar: <strong style="color: white;">1 April 2024</strong> <br>
                    <p style="font-size: 12px;">Harga: <strong style="color: green;">Rp12000</strong></p>
                </div>
                <!-- <div>1 April 2024</div> -->
                <div>
                    1x
                    <button class="customer-tick" style="background-color:#999">Selesai</button>
                </div>
            </div>
            <div class="in-panel">
                <div>
                    <strong>Nasi Kuning Telur</strong> <br>
                    Akan dibayar: <strong style="color: white;">2 April 2024</strong> <br>
                    <p style="font-size: 12px;">Harga: <strong style="color: green;">Rp12000</strong></p>
                </div>
                <!-- <div>1 April 2024</div> -->
                <div>
                    1x
                    <button class="customer-tick" style="background-color:#999">Selesai</button>
                </div>
            </div>
        </div> --}}

        @foreach ($keranjangs as $keranjang)
        <button class="customer-box accordion thumbnail">
            <div>{{ $keranjang->nama_pelanggan }}</div>
            <div>+</div>
        </button>
        <div class="panel">
            <div class="in-panel">
                <div>
                    <strong>{{ $keranjang->nama_keranjang }}</strong> <br>
                    {{-- Akan dibayar: <strong style="color: white;">3 April 2024</strong> <br> --}}
                    <p style="font-size: 12px;">Harga: <strong style="color: green;">Rp12000</strong></p>
                    <p style="font-size: 12px;">Total Harga: <strong style="color: green;">{{ $keranjang->jumlah_keranjang * 12000 }}</strong></p>
                    <p style="font-size: 12px;">Metode Pembayaran: <strong style="color: green;">{{ $keranjang->metode_pembelian}}</strong></p>
                </div>
                <!-- <div>1 April 2024</div> -->
                <div>
                    {{ $keranjang->jumlah_keranjang }}
                    <form action="{{ route('histori.delete', $keranjang->id_keranjang) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="nama_keranjang" id="nama_keranjang" value="{{ $keranjang->nama_keranjang }}">
                        <input type="hidden" name="nama_pelanggan" id="nama_pelanggan" value="{{ $keranjang->nama_pelanggan }}">
                        <input type="hidden" name="jumlah_keranjang" id="jumlah_keranjang" value=" {{ $keranjang->jumlah_keranjang }}">
                        <input type="hidden" name="harga_total" id="harga_total" value=" {{ $keranjang->jumlah_keranjang * 12000 }}">
                        <button type="submit" >Selesai</button>
                    </form>
                </div>
            </div>
        </div> 
        @endforeach
        
    </div>
 </main>
</x-template>
    <script></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
