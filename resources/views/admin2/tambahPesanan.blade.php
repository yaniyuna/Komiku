<x-admin-layout>
    <h2 class="text-xl font-bold mb-4">
        {{$title}}
    </h2>
    <div class="bg-white p-6 w-1/2 rounded-lg shadow-lg">
        <form enctype="multipart/form-data" 
              action="{{ (isset($pesanan)) ? route('admin2.update', $pesanan->id_pesanan) : route('admin2.store') }}" 
              method="POST">
            @csrf
            @if(isset($pesanan))
                @method('PUT')
            @endif

            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-6 sm:col-span-3">
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul Komik</label>
                    <select id="judul" name="id_komik" 
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Pilih Judul</option>
                        @foreach ($komiks as $item)
                            <option value="{{$item->id_komik}}" 
                                    {{ ((isset($pesanan) && $pesanan->id_komik == $item->id_komik) || old('id_komik') == $item->id_komik) ? 'selected' : '' }}>
                                {{$item->judul}}
                            </option>
                        @endforeach
                    </select>
                    @error('id_komik')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="transaksi" class="block text-sm font-medium text-gray-700">ID Transaksi</label>
                    <select id="transaksi" name="id_transaksi" 
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Pilih ID Transaksi</option>
                        @foreach ($transaksis as $item)
                            <option value="{{$item->id_transaksi}}" 
                                    {{ ((isset($pesanan) && $pesanan->id_transaksi == $item->id_transaksi) || old('id_transaksi') == $item->id_transaksi) ? 'selected' : '' }}>
                                {{$item->id_transaksi}}
                            </option>
                        @endforeach
                    </select>
                    @error('id_transaksi')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="kuantitas" class="block text-gray-600 mb-2">Kuantitas</label>
                    <input type="number" id="kuantitas" name="kuantitas" 
                           placeholder="Masukkan kuantitas" 
                           value="{{ isset($pesanan) ? $pesanan->kuantitas : old('kuantitas') }}" 
                           class="w-full p-2 border rounded-md">
                    @error('kuantitas')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="subtotal" class="block text-gray-600 mb-2">Subtotal</label>
                    <input type="number" id="subtotal" name="subtotal" 
                           placeholder="Masukkan subtotal" 
                           value="{{ isset($pesanan) ? $pesanan->subtotal : old('subtotal') }}" 
                           class="w-full p-2 border rounded-md">
                    @error('subtotal')
                        <div class="text-xs text-red-800">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="mt-4 flex justify-end space-x-2">
                <button type="button" id="closeForm" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Batal
                </button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>
