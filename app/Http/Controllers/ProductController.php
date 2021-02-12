<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;


class ProductController extends Controller
{
    public function showDetails(Product $product) {
        return view('pages.product', ['product'=>$product]);
    }

    public function showCat(Request $request) {
        $products = Product::query();
        if ($request->has('sortBy') && ($request->sortBy == 'name' || $request->sortBy == 'price')) {
            $products = $products->orderBy($request->sortBy);
        }
        return view('pages/catalog', ['products' => $products->get()]);
    }
}
