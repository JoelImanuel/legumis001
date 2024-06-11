<x-template>
<main class="todo">
            <div class="box">
                <div class="lis">
                    <h2>List Bahan Makanan</h2>
                    <form id="grocery" action="" method="POST">
                        @csrf
                        <input id="writelist" type="text" placeholder="Item Belanja" require name="nama" id="nama">
                        <input id="writelist" type="text" placeholder="Item Harga" require name="harga" id="harga">
                        {{-- <input id="writelist" type="text" placeholder="Stok Produk" require name="stok_produk" id="stok_produk"> --}}
                        <button>Tambah item</button>
                    </form>
                </div>
            </div>
            <ol>
                @foreach ($bahans as $bahan)
                    <li>{{ $bahan->nama.' '.$bahan->harga }} 
                        <form action="/produk/{{ $bahan->id }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Delete</button>
                        </form>
                    </li>
                @endforeach
            </ol>
        </main>
</x-template>
    {{-- <script>
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
    </script> --}}
