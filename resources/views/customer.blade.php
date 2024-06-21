<x-template>
    <main>
        <div class="customer-pad">
            <form id="belanjaanForm">
                <input type="text" id="customerName" placeholder="Nama Customer" required>
                <input type="text" id="productName" placeholder="Nama Produk" required>
                <input type="date" id="paymentDate" required>
                <input type="number" id="productPrice" placeholder="Harga" required>
                <button type="submit">Tambah Belanjaan</button>
            </form>
    
            <div id="belanjaanList">
                <!-- Daftar belanjaan dari customer -->
            </div>
        </div>
    
        <div id="dashboard">
            <h3>Total Nominal Terjual</h3>
            <div id="totalNominal">Rp0</div>
        </div>
    </main>
    </x-template>
    
    <script>
        document.getElementById('belanjaanForm').addEventListener('submit', function(e) {
            e.preventDefault();
    
            var customerName = document.getElementById('customerName').value;
            var productName = document.getElementById('productName').value;
            var paymentDate = document.getElementById('paymentDate').value;
            var productPrice = document.getElementById('productPrice').value;
    
            // Tambahkan data belanjaan ke dalam list
            var belanjaanList = document.getElementById('belanjaanList');
            var newBelanjaan = `
                <button class="customer-box accordion thumbnail">
                    <div>${customerName}</div>
                    <div>Belum Terbayar</div>
                </button>
                <div class="panel" style="display: none;">
                    <div class="in-panel">
                        <div>
                            <strong>${productName}</strong> <br>
                            Akan dibayar: <strong style="color: white;">${paymentDate}</strong> <br>
                            <p style="font-size: 12px;">Harga: <strong style="color: green;">Rp${productPrice}</strong></p>
                        </div>
                        <div>
                            1x
                            <button class="customer-tick" style="background-color:#999" onclick="selesaiBelanja(this, ${productPrice})">Selesai</button>
                        </div>
                    </div>
                </div>
            `;
            belanjaanList.insertAdjacentHTML('beforeend', newBelanjaan);
    
            // Reset form setelah submit
            document.getElementById('belanjaanForm').reset();
    
            // Re-attach accordion event listeners
            attachAccordionListeners();
        });
    
        function attachAccordionListeners() {
            var acc = document.querySelectorAll(".customer-box");
            acc.forEach(function(item) {
                item.removeEventListener("click", togglePanel);
                item.addEventListener("click", togglePanel);
            });
        }
    
        function togglePanel() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
                this.children[1].innerText = 'Belum Terbayar';
            } else {
                panel.style.display = "block";
                this.children[1].innerText = 'Lihat Detail';
            }
        }
    
        function selesaiBelanja(button, price) {
            button.style.backgroundColor = 'green';
            button.innerText = 'Dibayar';
    
            // Update total nominal terjual di dasbor
            var totalNominal = document.getElementById('totalNominal');
            var currentTotal = parseInt(totalNominal.innerText.replace('Rp', '').replace(/\./g, '')) || 0;
            var newTotal = currentTotal + parseInt(price);
            totalNominal.innerText = 'Rp' + newTotal.toLocaleString('id-ID');
    
            // Simpan total nominal baru ke session melalui AJAX
            fetch('/update-total-nominal', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ totalNominal: newTotal })
            });
        }
    
        document.addEventListener('DOMContentLoaded', function() {
            attachAccordionListeners();
        });
    </script>
    