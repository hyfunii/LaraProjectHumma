<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // Retrieve the user's cart and eager load the 'items' and 'product' relationships
        $cart = auth()->user()->cart()->with('items.product')->first();

        // If the cart exists, get its items, otherwise, return an empty collection
        $cartItems = $cart ? $cart->items : collect(); // Use collect() to ensure it's always iterable

        // Pass the cart items to the view
        return view('user.cart', compact('cartItems'));
    }

    public function add(Request $request, $productId)
    {
        // Find the product using 'product_id'
        $product = Product::where('product_id', $productId)->firstOrFail();

        // Get the user's cart, create one if it doesn't exist
        $cart = auth()->user()->cart()->firstOrCreate([]);

        // Check if the item is already in the cart
        $cartItem = $cart->items()->where('product_id', $product->product_id)->first();

        if ($cartItem) {
            // Increment the quantity if the item is already in the cart
            $cartItem->increment('quantity', $request->input('quantity', 1));
        } else {
            // Add the item to the cart if it doesn't exist
            $cart->items()->create([
                'product_id' => $product->product_id,
                'quantity' => $request->input('quantity', 1),
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

}
