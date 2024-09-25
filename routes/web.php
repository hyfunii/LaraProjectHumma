<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('user.home');
// });

Route::get('/cart', function () {
    return view('user.cart');
});

// Route::get('/home', function () {
//     return view('user.home');
// })->middleware(['auth', 'verified'])->name('home');

// Route::get('/home', function () {
//     return view('user.home');
// })->name('home');
Route::get('/home', function () {
    return view('user.detail_product');
})->name('home');

Route::get('/cart', function () {
    return view('user.cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('detail_product');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
