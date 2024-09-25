<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view("user.home",compact("products"));
    }

    public function show($productId)
    {
        $product = Product::where('product_id', $productId)->first();

        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }

        return view('user.detail_product', compact('product'));
    }
}
