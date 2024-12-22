<x-admin-layout>
    <h2 class="text-xl font-bold mb-4">
        {{$title}}
    </h2>
    <script src="{{asset('assets/js/admin.js')}}"></script>

    <div class="bg-white shadow-md rounded-lg p-6">
        {{-- <h3 class="text-xl font-bold mb-4">Data Komiku</h3> --}}
        <table class="table-auto w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Judul</th>
                    <th class="px-4 py-2">Penulis</th>
                    <th class="px-4 py-2">Kategori</th>
                    <th class="px-4 py-2">Tahun Terbit</th>
                    <th class="px-4 py-2">Sinopsis</th>
                    <th class="px-4 py-2">Harga</th>
                    <th class="px-4 py-2">Stok</th>
                    <th class="px-4 py-2">Gambar</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($komiks as $item )
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $item->id_komik }}</td>
                        <td class="px-4 py-2">{{ $item->judul }}</td>
                        <td class="px-4 py-2">{{ $item->penulis }}</td>
                        <td class="px-4 py-2">{{ $item->kategori }}</td>
                        <td class="px-4 py-2">{{ $item->thn_terbit }}</td>
                        <td class="px-4 py-2">{{ $item->sinopsis }}</td>
                        <td class="px-4 py-2">{{ $item->harga }}</td>
                        <td class="px-4 py-2">{{ $item->stok }}</td>
                        <td class="px-4 py-2">
                            <img src="{{ asset($item->feature_img) }}" alt="" class="w-16 h-16 object-cover">
                        </td>


                        <td class="px-4 py-2 text-center">
                            <div class="flex justify-center space-x-2">
                                <form action="{{ route('admin.destroy', $item->id_komik) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">
                                        <a href="{{ route('admin.edit', $item->id_komik) }}">Edit</a>
                                    </button>
                                    <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm('Anda Yakin?')" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button id="toggleForm" class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            <a href="{{ route('admin.create') }}">Tambah Komik</a>
        </button>
    </div>

    {{-- <div class="m-4">{{ $komiks->links() }}</div> --}}

    <!-- Hidden Overlay Form -->
    {{-- <div id="inputForm" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-6 w-1/2 rounded-lg shadow-lg">
            <h3 class="text-lg font-bold mb-4">Input Barang</h3>
            <form action="/input-barang" method="POST" enctype="multipart/form-data">
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
    </div> --}}

</x-admin-layout>