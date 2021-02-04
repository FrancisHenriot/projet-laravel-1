<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOfficeController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

/*version où l'on passe le numéro d'id comme un integer
Route::get('/product/{id}', [ProductController::class, 'showDetail'])->name('product-detail');
*/

/*version ou l'on va faire de l'injection de dépendance, c'est à dire qu'on va envoyer le numéro de l'id,
mais en le nommant du même nom que notre modèle (Product), la fonction créera directement un objet d'après ce numéro d'id*/
Route::get('/product/{product}', [ProductController::class, 'showDetail'])->name('product-detail');
/*fin version*/

Route::get('/cart', [CartController::class, 'show'])->name('cart');

Route::get('/backoffice', [BackOfficeController::class, 'showIndex'])->name('backoffice');

Route::get('/backoffice/product', [BackOfficeController::class, 'showForm'])->name('backoffice-new-form');
Route::post('/backoffice/product', [BackOfficeController::class, 'addProduct'])->name('add');
