@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container mx-auto px-4 py-8 mt-16">
        <h1 class="text-4xl font-bold mb-8 text-center">Our Products</h1>

        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @foreach ($products as $product)
                <a href="{{ route('detail_product', ['id' => $product->product_id]) }}"
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-200">
                    <img src="https://via.placeholder.com/300x200?text={{ $product->name }}" alt="{{ $product->name }}"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-bold mb-2">{{ $product->name }}</h2>
                        <p class="text-gray-600">{{ $product->desc }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="text-l font-bold text-blue-600">Rp. {{ $product->price }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
