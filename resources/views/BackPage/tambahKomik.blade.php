<x-admin-layout>
    <h2 class="text-xl font-bold mb-4">
        {{$title}}
    </h2>
    <div id="inputForm" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-6 w-1/2 rounded-lg shadow-lg">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="judul" class="block text-gray-600 mb-2">Judul</label>
                        <input type="text" id="judul" name="judul" placeholder="Masukkan judul komik" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="penulis" class="block text-gray-600 mb-2">Penulis</label>
                        <input type="text" id="penulis" name="penulis" placeholder="Masukkan nama penulis" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="kategori" class="block text-gray-600 mb-2">Kategori</label>
                        <input type="text" id="kategori" name="kategori" placeholder="Masukkan kategori komik" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="tahun" class="block text-gray-600 mb-2">Tahun Terbit</label>
                        <input type="number" id="tahun" name="tahun" placeholder="Masukkan tahun terbit" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="harga" class="block text-gray-600 mb-2">Harga</label>
                        <input type="number" id="harga" name="harga" placeholder="Masukkan harga komik" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="stok" class="block text-gray-600 mb-2">Stok</label>
                        <input type="number" id="stok" name="stok" placeholder="Masukkan jumlah stok" class="w-full p-2 border rounded-md">
                    </div>
                    <div class="col-span-2">
                        <label for="sinopsis" class="block text-gray-600 mb-2">Sinopsis</label>
                        <textarea id="sinopsis" name="sinopsis" placeholder="Masukkan sinopsis komik" class="w-full p-2 border rounded-md"></textarea>
                    </div>
                    <div class="col-span-2">
                        <label for="gambar" class="block text-gray-600 mb-2">Gambar</label>
                        <input type="file" id="gambar" name="gambar" class="w-full p-2 border rounded-md">
                    </div>
                </div>
                <div class="mt-4 flex justify-end space-x-2">
                    <button type="button" id="closeForm" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>