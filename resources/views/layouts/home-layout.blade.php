<!DOCTYPE html>
<html lang="{{ str_replace('', '', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- karena template untuk frontpage, silakan Lengkapi meta tag yang lain untuk SEO--}}
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        {{-- nama web sesuai konfigurasi, dapat juga dibuat dinamis--}}
        <title>{{ config('app.name', 'Inventori Komik') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigationhome')
            <!-- Page Content -->
            <main>
            {{-- Slot untuk halaman konten yang berubah dinamis sesuai dengan view yang dipanggil oleh controller --}}
                {{ $slot }}
            </main>
        </div>
    </body>
    <footer class="bg-gray-800 text-white py-4">
        <div class="text-center text-sm">
            &copy; 2024 Your Company. All rights reserved.
        </div>
    </footer>
</html>