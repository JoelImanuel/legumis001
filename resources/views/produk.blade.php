<x-template>
<main class="todo">
            <div class="box">
                <div class="lis">
                    <h2>List Bahan Makanan</h2>
                    <form id="grocery">
                        <input id="writelist" type="text" placeholder="Item Belanja" require>
                        <input id="writelist" type="text" placeholder="Item Harga" require>
                        <button>Tambah item</button>
                    </form>
                </div>
            </div>
            <ol>aaaaaaa</ol>
        </main>
</x-template>
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
