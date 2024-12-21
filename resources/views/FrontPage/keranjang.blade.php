
<x-home-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$title}}
    </h2>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shooping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head> --}}
{{-- <body class="flex flex-col min-h-screen bg-gray-50"> --}}
    <!-- Main Container -->
    <div class="flex-grow flex flex-col">
        <!-- Shopping Cart Panel -->
        <div class="relative flex-grow" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gradient-to-r from-antiquewhite to-antiquewhite transition-opacity" aria-hidden="true"></div>

            <div class="relative flex-grow overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                        <div class="pointer-events-auto w-screen max-w-lg h-full flex flex-col">
                            <div class="shopping-cart flex flex-col h-full overflow bg-gradient-to-b from-gray-50 via-white to-gray-100 shadow-2xl rounded-lg">
                                <!-- Cart Header -->
                                <div class="cart-header px-4 py-6 sm:px-6 bg-gradient-to-r from-blue-400 to-blue-200">
                                    <h2 class="text-lg font-bold text-black" id="slide-over-title">Shopping Cart</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-600 transition ease-in-out duration-200">
                                            <span class="sr-only">Close panel</span>
                                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Cart Items -->
                                <div class="flex-grow overflow-y-auto px-4 py-6 sm:px-6 bg-gradient-to-b from-teal-500 to-teal-500">
                                    <div class="mt-8">
                                        <div class="flow-root">
                                            <ul role="list" class="-my-6 divide-y divide-gray-300">
                                                <li class="flex py-6 transition ease-in-out duration-200 hover:bg-gray-300 rounded-lg shadow-md">
                                                    <div class="w-32 h-32 shrink-0 overflow-hidden rounded-md border border-gray-300">
                                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="object-cover w-full h-full">
                                                    </div>

                                                    <div class="ml-8 flex flex-1 flex-col">
                                                        <div class="mb-2">
                                                            <h3 class="text-lg font-semibold text-indigo-700">
                                                                <a href="#" class="text-black">Throwback Hip Bag</a>
                                                            </h3>
                                                            <p class="text-sm text-gray-600">Salmon</p>
                                                        </div>
                                                        <div class="flex items-center text-sm">
                                                            <p class="text-black font-medium text-lg mr-4">$90.00</p>
                                                            <p class="text-gray-500">Qty: <span class="font-medium">1</span></p>
                                                        </div>
                                                        <button type="button" class="mt-2 self-start font-medium text-red-500 hover:text-red-700 transition ease-in-out duration-200">Remove</button>
                                                    </div>
                                                </li>
                                                <!-- More products... -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Cart Footer -->
                                <div class="cart-footer border-t border-gray-300 px-4 py-6 sm:px-6 bg-gradient-to-r from-blue-400 to-blue-200">
                                    <div class="flex justify-between text-base font-medium text-indigo-700">
                                        <p class="text-black">Subtotal</p>
                                        <p class="text-black">$262.00</p>
                                    </div>
                                    <p class="mt-0.5 text-sm text-gray-600">Shipping and taxes calculated at checkout.</p>
                                    <div class="mt-6">
                                        <a href="#" class="flex items-center justify-center rounded-lg border border-transparent bg-blue-500 px-6 py-3 text-base font-medium text-white shadow-lg hover:bg-blue-600 active:bg-gray-700 transition ease-in-out duration-200">
                                            Checkout
                                        </a>
                                    </div>
                                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                        <p>
                                            or
                                            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-200">
                                                Continue Shopping
                                                <span aria-hidden="true"> &rarr;</span>
                                            </button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    
{{-- </body>
</html> --}}
</x-home-layout>

