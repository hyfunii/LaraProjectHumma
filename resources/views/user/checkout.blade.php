@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container mx-auto py-10 flex mt-16">
    <div class="w-1/2 pr-5">
        <h2 class="text-xl font-bold mb-4">Your Products</h2>
        @php
            $products = [
                ['name' => 'Product 1', 'price' => 100000, 'image' => 'https://via.placeholder.com/150'],
                ['name' => 'Product 2', 'price' => 150000, 'image' => 'https://via.placeholder.com/150'],
                ['name' => 'Product 3', 'price' => 250000, 'image' => 'https://via.placeholder.com/150'],
            ];
        @endphp

        @foreach ($products as $product)
            <div class="flex items-center mb-5">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-1/3 rounded-md">
                <div class="ml-4">
                    <h3 class="text-lg font-bold">{{ $product['name'] }}</h3>
                    <p class="text-md text-gray-700">Price: Rp. {{ number_format($product['price'], 0, ',', '.') }}</p>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="w-1/3 pl-5 border border-gray-300 p-4 rounded-md fixed right-16">
        <h2 class="text-xl font-bold mb-4">Shopping Summary</h2>
        
        @php
            $totalPrice = array_sum(array_column($products, 'price'));
            $serviceFee = 10000;
            $total = $totalPrice + $serviceFee;
        @endphp

        <div class="mb-2">
            <span class="font-medium">Total Price:</span>
            <span class="float-right">Rp. {{ number_format($totalPrice, 0, ',', '.') }}</span>
        </div>
        <div class="mb-2">
            <span class="font-medium">Service Fee:</span>
            <span class="float-right">Rp. {{ number_format($serviceFee, 0, ',', '.') }}</span>
        </div>
        <div class="border-t mt-4 pt-2">
            <div class="mb-2">
                <span class="font-bold">Total:</span>
                <span class="float-right text-lg">Rp. {{ number_format($total, 0, ',', '.') }}</span>
            </div>
            <button class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-700 transition duration-200">Checkout</button>
        </div>
    </div>
</div>
@endsection
