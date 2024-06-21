<x-template>
<main>
            <div class="content">
                <div class="thumbnail">
                    <div>
                        <div class="numbers">1</div>
                        <div class="cardName">Produk</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">Restaurant</span>
                    </div>
                </div>
                <div class="thumbnail">
                    <div>
                        <div class="numbers">3</div>
                        <div class="cardName">Jumlah Admin</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">Groups</span>
                    </div>
                </div>
                <div class="thumbnail">
                    <div>
                        <div class="numbers">{{ $total_pelanggan }}</div>
                        <div class="cardName">Jumlah konsumen</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                </div>
                <div class="thumbnail">
                    <div>
                        <div class="numbers">{{ $total_pesanan }}</div>
                        <div class="cardName">Total pesanan</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">List_Alt</span>
                    </div>
                </div>
                <div class="thumbnail">
                    <div>
                        <div class="numbers">0</div>
                        <div class="cardName">Produk Tertunda</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">Cancel</span>
                    </div>
                </div>
                <a href="transaksi.php"><div class="thumbnail">
                    <div>
                        <div class="numbers">{{ number_format($total_harga_total / 1000, 0, '.', '') . 'K' }}
                        </div>
                        <div class="cardName">Total nominal terjual</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">Monetization_On</span>
                    </div>
                </div></a>
            </div>
        </main>
</x-template>

