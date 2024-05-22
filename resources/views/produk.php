<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Bahan Produk</title>
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
                <a href="#">
                    <span class="material-symbols-outlined">person_outline</span>
                    <h3>Customer</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">insights</span>
                    <h3>Analisa</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-outlined">local_shipping</span>
                    <h3>Pengiriman</h3>
                </a>
                <a href="transaksi.php">
                    <span class="material-symbols-outlined">paid</span>
                    <h3>Transaksi</h3>
                <a href="produk.php" class="active">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <h3>Produk</h3>
                </a>
                <a href="#">
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
        <main class="todo">
            <div class="box">
                <div class="lis">
                    <h2>List Bahan Makanan</h2>
                    <form id="grocery">
                        <input id="writelist" type="text" placeholder="Item Belanja..." require>
                        <button>Tambah item</button>
                    </form>
                </div>
            </div>
            <ol></ol>
        </main>
    </div>

    <script>
         let grocery = document.getElementById('grocery');
         grocery.addEventListener('submit', addItem);
         function addItem(e){
            e.preventDefault();
            let data = this.element.writeList.value;
            let list = document.querySelector('ol');
            let item = document.createElement('li');
            let text = document.createElement('p');

            text.textContent = data;
            this.elements.writeList.value = "";
            item.append(text);
            list.append(item);

            let rmvBtn = document.createElement('span');
            rmvBtn.classList.add('remove');
            item.append(rmvBtn);
            rmvBtn.addEventListener('click', deleteItem);
            item.addEventListener('click', doneItem);
         }

         function deleteItem(e){
            this.parentElement.remove();
         }

         function doneItem(e){
            this.classList.toggle('done');
         }
    </script>
</body>
</html>