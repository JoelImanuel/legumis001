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
                <a href="index.php" class="active">
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
                        <div class="numbers">27</div>
                        <div class="cardName">Jumlah konsumen</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                </div>
                <div class="thumbnail">
                    <div>
                        <div class="numbers">27</div>
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
                        <div class="numbers">Rp 10k</div>
                        <div class="cardName">Total nominal terjual</div>
                    </div>

                    <div class="iconbx">
                        <span class="material-symbols-outlined">Monetization_On</span>
                    </div>
                </div></a>
            </div>
        </main>
        <!--main section end-->
    </div>

    <script></script>
</body>

</html>