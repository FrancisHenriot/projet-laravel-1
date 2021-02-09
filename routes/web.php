<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

Route::get('/',[HomeController::class, 'show'])->name('home');

Route::get('/cat',[ProductController::class, 'showCat'])->name('catalog');

Route::get('/product/{id}',[ProductController::class, 'showDetails'])->name('details');

Route::get('/cart',[CartController::class, 'show'])->name('cart');
