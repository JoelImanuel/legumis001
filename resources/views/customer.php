<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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
                <a href="customer.php" class="active">
                    <span class="material-symbols-outlined">person_outline</span>
                    <h3>Customer</h3>
                </a>
                <a href="analisa.php">
                    <span class="material-symbols-outlined">insights</span>
                    <h3>Analisa</h3>
                </a>
                <a href="pengiriman.php">
                    <span class="material-symbols-outlined">local_shipping</span>
                    <h3>Pengiriman</h3>
                </a>
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
                    <div>Stanley Phangkawira</div>
                    <div>+</div>
                </button>
                <div class="panel">
                    <div class="in-panel">
                        <div>
                            <strong>Nasi Kuning Ayam</strong> <br>
                            Akan dibayar: <strong style="color: red;">1 April 2024</strong> <br>
                            <p style="font-size: 12px;">Harga: <strong style="color: red;">Rp10000</strong></p>
                        </div>
                        <!-- <div>1 April 2024</div> -->
                        <div>
                            1x
                            <button class="customer-tick">Selesai</button>
                        </div>
                    </div>
                    <div class="in-panel">
                        <div>
                            <strong>Nasi Kuning Telur</strong> <br>
                            Akan dibayar: <strong style="color: red;">2 April 2024</strong> <br>
                            <p style="font-size: 12px;">Harga: <strong style="color: red;">Rp10000</strong></p>
                        </div>
                        <!-- <div>1 April 2024</div> -->
                        <div>
                            1x
                            <button class="customer-tick">Selesai</button>
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
                            Akan dibayar: <strong style="color: red;">3 April 2024</strong> <br>
                            <p style="font-size: 12px;">Harga: <strong style="color: red;">Rp10000</strong></p>
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