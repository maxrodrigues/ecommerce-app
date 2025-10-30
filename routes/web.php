<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.public.home');
})->name('home');

Route::get('/product', function () {
    return view('pages.public.product');
})->name('product');

Route::get('/cart', function () {
    return view('pages.public.cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.public.checkout');
})->name('checkout');

Route::get('/login', function () {
    return view('pages.public.login');
})->name('login');
