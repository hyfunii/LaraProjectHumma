@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-4">Daftar Toko</h1>
        <div class="space-y-4">
            @php
                $stores = [
                    ['name' => 'Store A', 'photo_url' => 'https://via.placeholder.com/150', 'item_count' => 20],
                    ['name' => 'Store B', 'photo_url' => 'https://via.placeholder.com/150', 'item_count' => 15],
                    ['name' => 'Store C', 'photo_url' => 'https://via.placeholder.com/150', 'item_count' => 30],
                ];
            @endphp

            @foreach ($stores as $store)
                <a href="#"
                    class="flex items-center p-4 bg-white shadow-md rounded-lg hover:shadow-lg transition-shadow duration-300 cursor-pointer">
                    <img src="{{ $store['photo_url'] }}" alt="{{ $store['name'] }}"
                        class="w-16 h-16 object-cover rounded-full mr-4">
                    <div class="flex-grow">
                        <h2 class="text-lg font-semibold">{{ $store['name'] }}</h2>
                        <p class="text-gray-600">Product : {{ $store['item_count'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
