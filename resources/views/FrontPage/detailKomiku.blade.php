<x-home-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$title}}
    </h2>
  <div class="fixed inset-0 z-10 flex flex-col items-center justify-center bg-gray-500/75 backdrop-blur-sm" role="dialog" aria-modal="true">
    <!-- Modal Panel -->
    <div class="relative bg-white rounded-lg shadow-2xl max-w-2xl w-full p-6 sm:p-8 lg:max-w-4xl transform transition-all scale-95 animate border border-gray-200 flex-grow">
      <!-- Close Button -->
      <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-6 sm:right-6 lg:top-8 lg:right-8 focus:outline-none">
        <span class="sr-only">Close</span>
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
      
      <!-- Modal Content -->
      <div class="grid grid-cols-1 gap-6 sm:grid-cols-12 lg:gap-8">
        <!-- Product Image -->
        <div class="sm:col-span-5">
          <img src="https://tailwindui.com/plus/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Product image" class="w-full rounded-lg bg-gray-100 object-cover shadow-md">
        </div>
        
        <!-- Product Info -->
        <div class="sm:col-span-7">
          <h2 class="text-3xl font-extrabold text-gray-900 tracking-wide">Basic Tee 6-Pack</h2>
          <p class="mt-2 text-xl text-gray-700 font-medium">$192</p>
          
          <!-- Reviews -->
          <div class="mt-4 flex items-center">
            <div class="flex items-center space-x-1">
              <!-- Active Stars -->
              <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
              </svg>
              <!-- Repeat for more stars -->
            </div>
            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
          </div>
          
          <!-- Product Options -->
          <form class="mt-6">
            <!-- Color Options -->
            <fieldset>
              <legend class="text-sm font-medium text-gray-900">Color</legend>
              <div class="mt-4 flex items-center space-x-3">
                <label class="flex items-center cursor-pointer">
                  <input type="radio" name="color" value="white" class="sr-only">
                  <span class="w-8 h-8 rounded-full bg-white border border-gray-300 shadow-sm hover:ring-2 hover:ring-indigo-500 transition"></span>
                </label>
                <label class="flex items-center cursor-pointer">
                  <input type="radio" name="color" value="gray" class="sr-only">
                  <span class="w-8 h-8 rounded-full bg-gray-200 border border-gray-300 shadow-sm hover:ring-2 hover:ring-indigo-500 transition"></span>
                </label>
                <label class="flex items-center cursor-pointer">
                  <input type="radio" name="color" value="black" class="sr-only">
                  <span class="w-8 h-8 rounded-full bg-gray-900 border border-gray-300 shadow-sm hover:ring-2 hover:ring-indigo-500 transition"></span>
                </label>
              </div>
            </fieldset>
            
            <!-- Add to Bag -->
            <button type="submit" class="mt-6 w-full flex items-center justify-center rounded-md bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 px-4 py-3 text-base font-medium text-white hover:from-indigo-600 hover:via-purple-600 hover:to-pink-600 transition focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
              Add to Bag
            </button>
          </form>
        </div>
      </div>
    </div>
</x-home-layout>