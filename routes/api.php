<?php
use App\Http\Controllers\CartController;

Route::middleware('auth:sanctum')->get('/cart', [CartController::class, 'getCartItems'])->name('api.cart');
