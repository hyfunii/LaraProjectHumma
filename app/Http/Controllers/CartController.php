<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = auth()->user()->cart()->with('items.product')->first();

        $cartItems = $cart && $cart->items ? $cart->items : [];

        return view('user.cart', compact('cartItems'));
    }
    public function add(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $cart = auth()->user()->cart()->firstOrCreate([]);

        $cartItem = $cart->items()->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->increment('quantity', $request->input('quantity', 1));
        } else {
            $cart->items()->create([
                'product_id' => $productId,
                'quantity' => $request->input('quantity', 1),
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }
}
