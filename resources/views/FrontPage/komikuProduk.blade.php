<x-home-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$title}}
    </h2>
    {{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50"> --}}
    <!-- Wrapper yang memenuhi tinggi layar -->
    <div class="flex flex-col min-h-screen">
        <!-- Konten utama -->
        <div class="inset-0 bg-gradient-to-r from-green-100 to-green-100 flex-grow">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                <h2 class="sr-only">Products</h2>
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    <!-- Product 1 -->
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-01.jpg" 
                             alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." 
                             class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
                    </a>
                    <!-- Product 2 -->
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-02.jpg" 
                             alt="Olive drab green insulated bottle with flared screw lid and flat top." 
                             class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                    </a>
                    <!-- Product 3 -->
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-03.jpg" 
                             alt="Person using a pen to cross a task off a productivity paper card." 
                             class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
                    </a>
                    <!-- Product 4 -->
                    <a href="#" class="group">
                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-04.jpg" 
                             alt="Hand holding black machined steel mechanical pencil with brass tip and top." 
                             class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                        <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- Footer sebagai bagian bawah halaman -->
        {{-- <footer class="bg-gray-800 text-white py-4">
            <div class="text-center text-sm">
                &copy; 2024 Your Company. All rights reserved.
            </div>
        </footer>
    </div>
</body>
</html> --}}
</x-home-layout>