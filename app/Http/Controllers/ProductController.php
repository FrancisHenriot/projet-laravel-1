<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function showDetail($id)
    {
        //$product = DB::select('select * from products where id = ?', [$id]);

        /*$product = DB::table('products')
            ->where('id', '=', $id)
            ->get();
        */

        $product = Product::findOrFail($id);
        return view('product-detail', ['product' => $product]);
    }

    public function showList()
    {
        //$products = DB::select('select * from products');

        /*$products = DB::table('products')
            ->select('*')
            ->get();
        */

        $products = Product::select('*')->get();

        return view('product-list', ['products' => $products]);
    }
}
