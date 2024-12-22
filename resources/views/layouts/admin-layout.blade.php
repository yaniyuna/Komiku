<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title ?? 'Admin Panel' }}
    </title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="flex">
    <div class="w-64 bg-gray-800 text-white h-screen p-6">
        <h2 class="text-2xl font-bold text-center mb-6">Komikku</h2>
        <ul class="space-y-4">
            <li><a href="{{ route('data komiku') }}" class="block text-gray-300 hover:text-white">Data Komiku</a></li>
            <li><a href="{{ route('data pesanan') }}" class="block text-gray-300 hover:text-white">Data User</a></li>
            <li><a href="{{ route('data transaksi') }}" class="block text-gray-300 hover:text-white">Data Transaksi</a></li>
        </ul>
    </div>

    <div class="flex-1 p-8">
        <div class="bg-gray-700 text-white text-center py-4 rounded-lg mb-8">
            <h1 class="text-3xl font-bold">Welcome, Admin</h1>
        </div>
        {{$slot}}
</body>

</html>