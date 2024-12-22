<x-admin-layout>
    <h2 class="text-xl font-bold mb-4">
        {{$title}}
    </h2>
    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="table-auto w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID Transaksi</th>
                    <th class="px-4 py-2">Nama User</th>
                    <th class="px-4 py-2">Total Harga</th>
                    <th class="px-4 py-2">Tanggal Transaksi</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $item )   
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $item->id_transaksi }}</td>
                        <td class="px-4 py-2">{{ $item->user->name }}</td>
                        <td class="px-4 py-2">{{ $item->total_harga }}</td>
                        <td class="px-4 py-2">{{ $item->created_at }}</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</x-admin-layout>