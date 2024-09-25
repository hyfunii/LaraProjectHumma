@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-16">
    <h1 class="text-2xl font-bold mb-6">Your Cart</h1>

    <!-- Contoh Data Statis Keranjang -->
    @php
        $cartItems = [
            ['name' => 'Product 1', 'price' => 29.99, 'quantity' => 1, 'image_url' => 'https://via.placeholder.com/150'],
            ['name' => 'Product 2', 'price' => 39.99, 'quantity' => 2, 'image_url' => 'https://via.placeholder.com/150'],
            ['name' => 'Product 3', 'price' => 19.99, 'quantity' => 1, 'image_url' => 'https://via.placeholder.com/150'],
        ];
    @endphp

    @if (count($cartItems) > 0)
        <table class="min-w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-6 py-3 text-left text-gray-600">Product</th>
                    <th class="px-6 py-3 text-left text-gray-600">Quantity</th>
                    <th class="px-6 py-3 text-left text-gray-600">Price</th>
                    <th class="px-6 py-3 text-left text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0; @endphp
                @foreach ($cartItems as $item)
                    @php $total += $item['price'] * $item['quantity']; @endphp
                    <tr class="border-b">
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <img src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" class="h-16 w-16 object-cover mr-4">
                                <span>{{ $item['name'] }}</span>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <input type="number" value="{{ $item['quantity'] }}" min="1" class="border rounded-lg w-16 text-center">
                        </td>
                        <td class="px-6 py-4">
                            ${{ number_format($item['price'], 2) }}
                        </td>
                        <td class="px-6 py-4">
                            <button class="text-red-500 hover:text-red-700">Remove</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 flex justify-between items-center">
            <h2 class="text-lg font-semibold">Total: ${{ number_format($total, 2) }}</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Checkout</button>
        </div>
    @else
        <p class="text-gray-500">Your cart is empty.</p>
    @endif
</div>
@endsection
