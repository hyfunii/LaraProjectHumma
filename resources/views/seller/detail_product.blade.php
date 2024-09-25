@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-16">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/2">
                <img src="https://via.placeholder.com/600x400?text=Product+Name" alt="Product Name"
                    class="w-full h-auto object-cover rounded-lg shadow-md">
            </div>
            <div class="md:w-1/2 md:ml-8">
                <h1 class="text-4xl font-bold mb-4">Product Name</h1>
                <p class="text-gray-600 mb-6">Description of the product goes here.</p>
                <span class="text-xl font-bold text-blue-600 mb-4">Rp. 100.000</span>
                
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Stock</label>
                    <span class="text-lg font-semibold">10 units available</span>
                </div>
                
                <div class="mt-6 flex space-x-4">
                    <a href="#" class="inline-block px-4 py-2 border border-blue-500 text-blue-500 text-sm font-semibold rounded hover:bg-blue-500 hover:text-white transition duration-200">Edit Product</a>
                </div>
            </div>
        </div>
    </div>
@endsection
