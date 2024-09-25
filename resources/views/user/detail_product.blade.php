@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-16">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <img src="https://via.placeholder.com/600x400?text={{ $product->name }}" alt="{{ $product->name }}"
                    class="w-full h-auto object-cover rounded-lg shadow-md">
            </div>
            <div class="md:w-1/2 md:ml-8">
                <h1 class="text-4xl font-bold mb-4">{{ $product->name }}</h1>
                <p class="text-gray-600 mb-6">{{ $product->desc }}</p>
                <span class="text-xl font-bold text-blue-600 mb-4">Rp.
                    {{ number_format($product->price, 2, ',', '.') }}</span>
                <div class="mt-4 flex items-center">
                    <label for="quantity" class="block text-sm font-medium text-gray-700 mr-4">Quantity</label>
                    <div class="flex items-center border border-gray-300 rounded-md overflow-hidden">
                        <button id="decrement"
                            class="px-4 py-2 bg-white text-gray-700 border-r border-gray-300 hover:bg-gray-100 focus:outline-none">
                            -
                        </button>
                        <input id="quantity" type="number" min="1" value="1"
                            class="w-16 text-center border-0 focus:outline-none focus:ring-0 appearance-none" />
                        <button id="increment"
                            class="px-4 py-2 bg-white text-gray-700 border-l border-gray-300 hover:bg-gray-100 focus:outline-none">
                            +
                        </button>
                    </div>
                </div>
                <div class="mt-6 flex space-x-4">
                    <a href="#"
                        class="inline-block px-4 py-2 border border-blue-500 text-blue-500 text-sm font-semibold rounded hover:bg-blue-500 hover:text-white transition duration-200">Add
                        to Cart</a>
                    <a href="#"
                        class="inline-block px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-700 transition duration-200">Buy
                        Now</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        const incrementButton = document.getElementById('increment');
        const decrementButton = document.getElementById('decrement');
        const quantityInput = document.getElementById('quantity');

        incrementButton.addEventListener('click', () => {
            quantityInput.value = parseInt(quantityInput.value) + 1; // Increase quantity by 1
        });

        decrementButton.addEventListener('click', () => {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1; // Decrease quantity by 1, minimum 1
            }
        });
    </script>
@endsection
