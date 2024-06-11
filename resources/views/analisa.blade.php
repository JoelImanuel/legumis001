<x-template>
    <!--main section start-->
    <main>
            <div class="customer-pad">
                <button class="customer-box accordion thumbnail">
                    <div>Vinsen</div>
                    <div style="color: green;">+ Rp12000</div>
                </button>
                <button class="customer-box accordion thumbnail">
                    <div>stanley</div>
                    <div style="color: green;">+ Rp12000</div>
                </button>
                <div class="panel">
                    <div class="in-panel">
                        <div>
                            <strong>Nasi Kuning Telur</strong> <br>
                            Akan dibayar: <strong style="color: red;">3 April 2024</strong> <br>
                            <p style="font-size: 12px;">Harga: <strong style="color: red;">Rp12000</strong></p>
                        </div>
                        <!-- <div>1 April 2024</div> -->
                        <div>
                            1x
                            <button class="customer-tick" style="background-color: #999;">Udah bayar</button>
                        </div>
                    </div>
                </div>
            </div>




        </main>
        <!--main section end-->
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
