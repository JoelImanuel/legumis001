<x-template>
<main>
            <div class="customer-pad">
                <button class="customer-box accordion thumbnail">
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
                </div>
                <button class="customer-box accordion thumbnail">
                    <div>Vinsen</div>
                    <div>+</div>
                </button>
                <div class="panel">
                <div class="in-panel">
                        <div>
                            <strong>Nasi Kuning Telur</strong> <br>
                            Akan dibayar: <strong style="color: white;">3 April 2024</strong> <br>
                            <p style="font-size: 12px;">Harga: <strong style="color: green;">Rp12000</strong></p>
                        </div>
                        <!-- <div>1 April 2024</div> -->
                        <div>
                            1x
                            <button class="customer-tick" style="background-color: #999;">Selesai</button>
                        </div>
                    </div>
                </div>
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
