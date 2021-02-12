<?php

use App\Http\Controllers\BackofficeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;


//---------------------------------public-------------------------------------//
Route::get('/',[HomeController::class, 'show'])->name('home');

Route::get('/cat',[ProductController::class, 'showCat'])->name('catalog');

Route::get('/product/{product}',[ProductController::class, 'showDetails'])->name('details');

Route::get('/cart',[CartController::class, 'show'])->name('cart');


//---------------------------------backoffice-------------------------------------//

Route::get('/backoffice/products', [BackofficeController::class, 'index'])->name('backoffice');

Route::post('/backoffice/products', [BackofficeController::class, 'create'])->name('addProduct');

Route::get('/backoffice/products/{product}', [BackofficeController::class, 'edit'])->name('editProduct');

Route::put('/backoffice/products/{product}', [BackofficeController::class, 'update'])->name('updateProduct');

Route::delete('/backoffice/products/{product}', [BackofficeController::class, 'delete'])->name('deleteProduct');
