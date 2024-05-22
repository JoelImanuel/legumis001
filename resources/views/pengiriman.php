<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!--aside section start-->
        <aside>
            <div class="top">
                <div class="logo">
                    <h2>Legumis<span class="name"> snack</span></h2>
                </div>
            </div>
            <div class="menu">
                <a href="index.php">
                    <span class="material-symbols-outlined">grid_view</span>
                    <h3>Dasbor</h3>
                </a>
                <a href="customer.php">
                    <span class="material-symbols-outlined">person_outline</span>
                    <h3>Customer</h3>
                </a>
                <a href="analisa.php">
                    <span class="material-symbols-outlined">insights</span>
                    <h3>Analisa</h3>
                </a>
                <a href="pengiriman.php" class="active">
                    <span class="material-symbols-outlined">local_shipping</span>
                    <h3>Pengiriman</h3>
                    <a href="transaksi.php">
                    <span class="material-symbols-outlined">paid</span>
                    <h3>Transaksi</h3>
                </a>
                <a href="produk.php">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Produk</h3>
                </a>
                <a href="pengaturan.php">
                    <span class="material-symbols-outlined">settings</span>
                    <h3>Pengaturan</h3>
                </a>
                <a href="logout.php">
                    <span class="material-symbols-outlined">logout</span>
                    <h3>Keluar</h3>
                </a>
            </div>

        </aside>
        <!--aside section end-->

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
                            <button class="customer-tick">Selesai</button>
                        </div>
                    </div>
                    <div class="in-panel">
                        <div>Nasi Kuning Telur</div>
                        <div>
                            1x
                            <button class="customer-tick">Selesai</button>
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
                            <button class="customer-tick">Selesai</button>
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
    </div>

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
</body>
</html>