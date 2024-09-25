@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-16">
        <h1 class="text-4xl font-bold mb-8 text-center"></h1>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                <img src="https://via.placeholder.com/300x200?text=Product+1" alt="Product 1" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 1</h2>
                    <p class="text-gray-600">Description of Product 1</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp. 100.000</span>
                    </div>
                </div>
            </a>

            <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                <img src="https://via.placeholder.com/300x200?text=Product+2" alt="Product 2" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 2</h2>
                    <p class="text-gray-600">Description of Product 2</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp. 200.000</span>
                    </div>
                </div>
            </a>

            <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                <img src="https://via.placeholder.com/300x200?text=Product+3" alt="Product 3" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 3</h2>
                    <p class="text-gray-600">Description of Product 3</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp. 150.000</span>
                    </div>
                </div>
            </a>

            <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                <img src="https://via.placeholder.com/300x200?text=Product+4" alt="Product 4" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 4</h2>
                    <p class="text-gray-600">Description of Product 4</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp. 250.000</span>
                    </div>
                </div>
            </a>

            <a href="#" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                <img src="https://via.placeholder.com/300x200?text=Product+5" alt="Product 5" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h2 class="text-lg font-bold mb-2">Product 5</h2>
                    <p class="text-gray-600">Description of Product 5</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-blue-600">Rp. 300.000</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
