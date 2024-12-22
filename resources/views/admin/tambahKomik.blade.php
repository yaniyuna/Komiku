<x-admin-layout>
    <h2 class="text-xl font-bold mb-4">
        {{$title}}
    </h2>
        <div class="bg-white p-6 w-1/2 rounded-lg shadow-lg">
            <form enctype="multipart/form-data" action="{{(isset($komik)) ? route('admin.edit', $komik->id_komik) : route('admin.store')}}" method="POST" >
                @CSRF
                @if(isset($komik))
                    @method('PUT')
                @endif
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="judul" class="block text-gray-600 mb-2">Judul</label>
                        <input type="text" id="judul" name="judul" placeholder="Masukkan judul komik" required value="{{(isset($komik))?$komik->judul: old('judul')}}" class="w-full p-2 border rounded-md">
                        @error('judul')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="penulis" class="block text-gray-600 mb-2">Penulis</label>
                        <input type="text" id="penulis" name="penulis" placeholder="Masukkan nama penulis" required value="{{(isset($komik))?$komik->penulis: old('penulis')}}" class="w-full p-2 border rounded-md">
                        @error('penulis')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="kategori" class="block text-gray-600 mb-2">Kategori</label>
                        <input type="text" id="kategori" name="kategori" placeholder="Masukkan kategori komik" required value="{{(isset($komik))?$komik->kategori: old('kategori')}}" class="w-full p-2 border rounded-md">
                        @error('kategori')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="tahun" class="block text-gray-600 mb-2">Tahun Terbit</label>
                        <input type="number" id="tahun" name="thn_terbit" placeholder="Masukkan tahun terbit" required value="{{(isset($komik))?$komik->thn_terbit: old('thn_terbit')}}" class="w-full p-2 border rounded-md">
                        @error('thn_terbit')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-2">
                        <label for="sinopsis" class="block text-gray-600 mb-2">Sinopsis</label>
                        <textarea id="sinopsis" name="sinopsis" placeholder="Masukkan sinopsis komik" required value="{{(isset($komik))?$komik->sinopsis: old('sinopsis')}}" class="w-full p-2 border rounded-md"></textarea>
                        @error('sinopsis')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="harga" class="block text-gray-600 mb-2">Harga</label>
                        <input type="number" id="harga" name="harga" placeholder="Masukkan harga komik" required value="{{(isset($komik))?$komik->harga: old('harga')}}" class="w-full p-2 border rounded-md">
                        @error('harga')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="stok" class="block text-gray-600 mb-2">Stok</label>
                        <input type="number" id="stok" name="stok" placeholder="Masukkan jumlah stok" required value="{{(isset($komik))?$komik->stok: old('stok')}}" class="w-full p-2 border rounded-md">
                        @error('stok')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="col-span-2">
                        <label for="gambar" class="block text-gray-600 mb-2">Gambar</label>
                        <input type="file" id="gambar" name="feature_img" class="w-full p-2 border rounded-md">
                        @error('feature_img')
                            <div class=" text-xs text-red-800">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-4 flex justify-end space-x-2">
                    <button type="button" id="closeForm" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Batal</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" id = "submit-button">Simpan</button>
                </div>
            </form>
        </div>
</x-admin-layout>