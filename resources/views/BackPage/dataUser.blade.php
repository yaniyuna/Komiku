<x-admin-layout>
    <h2 class="text-xl font-bold mb-4">
        {{$title}}
    </h2>
    <script src="{{asset('assets/js/admin.js')}}"></script>

    <div class="bg-white shadow-md rounded-lg p-6">
        <table class="table-auto w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nama</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Password</th>
                    <th class="px-4 py-2">Role</th>
                    <th class="px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item )
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $item->id_user }}</td>
                        <td class="px-4 py-2">{{ $item->name }}</td>
                        <td class="px-4 py-2">{{ $item->email }}</td>
                        <td class="px-4 py-2">{{ $item->password }}</td>
                        <td class="px-4 py-2">{{ $item->role }}</td>
                        <td class="px-4 py-2 text-center">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
        <button id="toggleForm" class="mt-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
            <a href="{{ route('tambah user') }}">Tambah User</a> 
        </button>
    </div>

    <!-- Hidden Overlay Form -->
    {{-- <div id="inputForm" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white p-6 w-1/2 rounded-lg shadow-lg">
            <h3 class="text-lg font-bold mb-4">Tambah User</h3>
            <form action="/tambah-user" method="POST">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="nama" class="block text-gray-600 mb-2">Nama</label>
                        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-600 mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan email" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="password" class="block text-gray-600 mb-2">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label for="role" class="block text-gray-600 mb-2">Role</label>
                        <select id="role" name="role" class="w-full p-2 border rounded-md">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div>
                        <label for="status" class="block text-gray-600 mb-2">Status</label>
                        <select id="status" name="status" class="w-full p-2 border rounded-md">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
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