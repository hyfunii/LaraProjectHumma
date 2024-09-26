<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('user.home');
// });

// user

// Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('/cart', function () {
    return view('user.cart');
})->name('cart');

Route::get('/product', function () {
    return view('user.detail_product');
})->name('product');

Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

Route::get('/checkout', function () {
    return view('user.checkout');
})->name('checkout');

Route::get('/cart', function () {
    return view('user.cart');
})->middleware(['auth', 'verified'])->name('cart');

// seller
Route::get('/dashboard', function () {
    return view('seller.dashboard');
})->name('dashboard');

Route::get('/products', function () {
    return view('seller.detail_product');
})->name('products');

// admin
Route::get('/dashbord', function () {
    return view('admin.dashboard');
})->name('dashbord');

// middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
});


Route::get('/product/{id}', [ProductController::class, 'show'])->name('detail_product');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
