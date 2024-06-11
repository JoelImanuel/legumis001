<x-template>
    <!--main section start-->
    <main>
            <div class="customer-pad">
                <button class="customer-box accordion thumbnail">
                    <div>Memed</div>
                    <div>+</div>
                </button>
                <div class="panel">
                    <strong><p>Stanley</p></strong>
                    <div class="in-panel">
                        
                        <div>Nasi Kuning Ayam</div>
                        <div>
                            1x
                            <button class="customer-tick" style="background-color: #999;">Selesai</button>
                        </div>
                    </div>
                    <div class="in-panel">
                        <div>Nasi Kuning Telur</div>
                        <div>
                            1x
                            <button class="customer-tick" style="background-color: #999;">Selesai</button>
                        </div>
                    </div>
                    <small><em>Jalan itu ini no 100, Pontianak</p></em></small><p>
                </div>
                <button class="customer-box accordion thumbnail">
                    <div>Joel</div>
                    <div>+</div>
                </button>
                <div class="panel">
                    <strong><p>Jessica</p></strong>
                    <div class="in-panel">
                        <div>Nasi Kuning Telur</div>
                        <div>
                            1x
                            <button class="customer-tick" style="background-color: red;">Selesai</button>
                        </div>
                    </div>
                    <small><em>Jalan ini itu no 29, Kubu Raya</p></em></small><p>
                </div>
                <button class="customer-box accordion thumbnail">
                    <div>Adiel</div>
                    <div>+</div>
                </button>
                <div class="panel">
                <div class="in-panel">
                    <div>Kosong</div>
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
