<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
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
            <p>
                <?php
                session_start();

                if (!isset($_SESSION["login"]) || $_SESSION["login"] !== true) {
                    header("Location: login.php");
                } else {

                    echo "Hi, " . $_SESSION["admin"];
                }
                ?>


            </p>
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
                <a href="pengiriman.php">
                    <span class="material-symbols-outlined">local_shipping</span>
                    <h3>Pengiriman</h3>
                </a>
                <a href="transaksi.php" class="active">
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
                <a href="login.php">
                    <span class="material-symbols-outlined">login</span>
                    <h3>Keluar</h3>
                    <!-- <a href="logout.php">Keluar</a> -->
                </a>
            </div>


        </aside>
        <!--aside section end-->

        <!--main section start-->
        <main>
            <div class="content-transaksi">
                <div class="thumbnail-transaksi">
                    <div>
                        <div class="order-date">Tanggal Pemesanan: <strong style="color: red;"> 1 April 2024 </strong></div>
                        <div class="product">Produk: <strong> Nasi Kuning Ayam</strong></div>
                        <div class="customer">Pemesan: <strong> Stanley Phangkawira </strong></div>
                        <div class="paid"><strong> Rp10000 </strong></div>
                        <div class="status"><strong> Belum bayar </strong></div>
                    </div>

                    <!-- <div class="iconbx-transaksi">
                        <span class="material-symbols-outlined">Restaurant</span>
                    </div> -->
                </div>
                <div class="thumbnail-transaksi">
                    <div>
                        <div class="order-date">Tanggal Pemesanan: <strong style="color: red;"> 1 April 2024 </strong></div>
                        <div class="product">Produk: <strong> Nasi Kuning Telur</strong></div>
                        <div class="customer">Pemesan: <strong> Stanley Phangkawira </strong></div>
                        <div class="paid"><strong> Rp10000 </strong></div>
                        <div class="status"><strong> Belum bayar </strong></div>
                    </div>

                    <!-- <div class="iconbx-transaksi">
                        <span class="material-symbols-outlined">Restaurant</span>
                    </div> -->
                </div>
                <div class="thumbnail-transaksi">
                    <div>
                        <div class="order-date">Tanggal Pemesanan: <strong style="color: red;"> 3 April 2024 </strong></div>
                        <div class="product">Produk: <strong> Nasi Kuning Telur</strong></div>
                        <div class="customer">Pemesan: <strong> Vinsen </strong></div>
                        <div class="paid"><strong> Rp10000 </strong></div>
                        <div class="status"><strong style="color: green;"> Udah bayar </strong></div>
                    </div>

                    <!-- <div class="iconbx-transaksi">
                        <span class="material-symbols-outlined">Restaurant</span>
                    </div> -->
                </div>
            </div>
        </main>
        <!--main section end-->
    </div>

    <script></script>
</body>

</html>