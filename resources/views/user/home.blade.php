@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-16">
        <h1 class="text-4xl font-bold mb-8 text-center"></h1>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @php
                $products = [
                    ['name' => 'Product 1', 'photo_url' => 'https://via.placeholder.com/150', 'price' => '10000'],
                    ['name' => 'Product 2', 'photo_url' => 'https://via.placeholder.com/150', 'price' => '15000'],
                    ['name' => 'Product 3', 'photo_url' => 'https://via.placeholder.com/150', 'price' => '30000'],
                ];
            @endphp
            
            @foreach ($products as $product)
                <a href="#"
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                    <img src="{{ $product['photo_url'] }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold mb-2">{{ $product['name']}}</h2>
                        <p class="text-gray-600">Description of {{ $product['name']}}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-lg font-bold text-blue-600">Rp. {{ $product['price']}}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
