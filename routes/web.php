<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ModifyProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/product', [ProductController::class, 'showList'])->name('product-list');

Route::get('/product/{id}', [ProductController::class, 'showDetail'])->name('product-detail');

Route::get('/cart', [CartController::class, 'show'])->name('cart');

Route::get('/backoffice', [BackofficeController::class, 'show'])->name('backoffice-layout');//itération 7: je créer une route pour le Backoffice

Route::get('/backoffice/addproduct', [AddProductController::class, 'create'])->name('backoffice-layout');
Route::post('/backoffice/addproduct', [AddProductController::class, 'store'])->name('backoffice-layout');

Route::get('/backoffice/modifyproduct', [ModifyProductController::class, 'create'])->name('backoffice-layout');
Route::post('/backoffice/modifyproduct', [ModifyProductController::class, 'store'])->name('backoffice-layout');


