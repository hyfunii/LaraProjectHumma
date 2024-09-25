@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md mt-16">
        <h1 class="text-2xl font-bold mb-6">Your Cart</h1>

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
                <tr class="border-b">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/150" alt="Product 1" class="h-16 w-16 object-cover mr-4">
                            <span>Product 1</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <input type="number" value="2" min="1" class="border rounded-lg w-16 text-center">
                    </td>
                    <td class="px-6 py-4">
                        Rp. {{ number_format(100000, 2, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        <button class="text-red-500 hover:text-red-700">Remove</button>
                    </td>
                </tr>
                <tr class="border-b">
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <img src="https://via.placeholder.com/150" alt="Product 2" class="h-16 w-16 object-cover mr-4">
                            <span>Product 2</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <input type="number" value="1" min="1" class="border rounded-lg w-16 text-center">
                    </td>
                    <td class="px-6 py-4">
                        Rp. {{ number_format(200000, 2, ',', '.') }}
                    </td>
                    <td class="px-6 py-4">
                        <button class="text-red-500 hover:text-red-700">Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="mt-4 flex justify-between items-center">
            <h2 class="text-lg font-semibold">Total: Rp. {{ number_format(400000, 2, ',', '.') }}</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Checkout</button>
        </div>
    </div>
@endsection
