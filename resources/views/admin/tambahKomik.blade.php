<x-admin-layout>
    <h2 class="text-xl font-bold mb-4">
        {{ $title }}
    </h2>
    <div class="bg-white p-6 w-1/2 rounded-lg shadow-lg">
        <!-- Form untuk menambah atau mengedit data komik -->
        <form enctype="multipart/form-data" 
              action="{{ isset($komik) ? route('admin.update', $komik->id_komik) : route('admin.store') }}" 
              method="POST">
            @csrf
            @if(isset($komik))
                @method('PUT') <!-- Untuk metode HTTP PUT saat edit -->
            @endif

            <div class="grid grid-cols-2 gap-4">
                <!-- Input untuk judul -->
                <div class="col-span-2">
                    <label for="judul" class="block text-gray-600 mb-2">Judul</label>
                    <input type="text" 
                           id="judul" 
                           name="judul" 
                           placeholder="Masukkan judul komik" 
                           value="{{ old('judul', $komik->judul ?? '') }}" 
                           required 
                           class="w-full p-2 border rounded-md">
                    @error('judul')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input untuk penulis -->
                <div class="col-span-1">
                    <label for="penulis" class="block text-gray-600 mb-2">Penulis</label>
                    <input type="text" 
                           id="penulis" 
                           name="penulis" 
                           placeholder="Masukkan nama penulis" 
                           value="{{ old('penulis', $komik->penulis ?? '') }}" 
                           required 
                           class="w-full p-2 border rounded-md">
                    @error('penulis')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input untuk kategori -->
                <div class="col-span-1">
                    <label for="kategori" class="block text-gray-600 mb-2">Kategori</label>
                    <input type="text" 
                           id="kategori" 
                           name="kategori" 
                           placeholder="Masukkan kategori komik" 
                           value="{{ old('kategori', $komik->kategori ?? '') }}" 
                           required 
                           class="w-full p-2 border rounded-md">
                    @error('kategori')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input untuk tahun terbit -->
                <div class="col-span-1">
                    <label for="tahun" class="block text-gray-600 mb-2">Tahun Terbit</label>
                    <input type="number" 
                           id="tahun" 
                           name="thn_terbit" 
                           placeholder="Masukkan tahun terbit" 
                           value="{{ old('thn_terbit', $komik->thn_terbit ?? '') }}" 
                           required 
                           class="w-full p-2 border rounded-md">
                    @error('thn_terbit')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input untuk sinopsis -->
                <div class="col-span-2">
                    <label for="sinopsis" class="block text-gray-600 mb-2">Sinopsis</label>
                    <textarea id="sinopsis" 
                              name="sinopsis" 
                              placeholder="Masukkan sinopsis komik" 
                              required 
                              class="w-full p-2 border rounded-md">{{ old('sinopsis', $komik->sinopsis ?? '') }}</textarea>
                    @error('sinopsis')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input untuk harga -->
                <div class="col-span-1">
                    <label for="harga" class="block text-gray-600 mb-2">Harga</label>
                    <input type="number" 
                           id="harga" 
                           name="harga" 
                           placeholder="Masukkan harga komik" 
                           value="{{ old('harga', $komik->harga ?? '') }}" 
                           required 
                           class="w-full p-2 border rounded-md">
                    @error('harga')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input untuk stok -->
                <div class="col-span-1">
                    <label for="stok" class="block text-gray-600 mb-2">Stok</label>
                    <input type="number" 
                           id="stok" 
                           name="stok" 
                           placeholder="Masukkan jumlah stok" 
                           value="{{ old('stok', $komik->stok ?? '') }}" 
                           required 
                           class="w-full p-2 border rounded-md">
                    @error('stok')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input untuk gambar -->
                <div class="col-span-2">
                    <label for="gambar" class="block text-gray-600 mb-2">Gambar</label>
                    <input type="file" 
                           id="gambar" 
                           name="feature_img" 
                           class="w-full p-2 border rounded-md">
                    @error('feature_img')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Tombol aksi -->
            <div class="mt-4 flex justify-end space-x-2">
                <button type="button" 
                        id="closeForm" 
                        class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Batal
                </button>
                <button type="submit" 
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600" 
                        id="submit-button">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
