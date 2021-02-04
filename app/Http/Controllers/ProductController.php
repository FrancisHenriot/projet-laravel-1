<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showDetail($id) //Product $product)
    {
        //$product = DB::select('select * from products where id = ?', [$id]);

        /*$product = DB::table('products')
            ->where('id', '=', $id)
            ->get();
        */

        $product = Product::findOrFail($id);
        //dd($product);
        return view('product-detail', ['product' => $product]);
    }

    public function showList(Request $request)
    {
        //$products = DB::select('select * from products');

        /*$products = DB::table('products')
            ->select('*')
            ->get();
        */
        $products = Product::all();
        if ($request->has('sortBy') && ($request->sortBy == 'name' || $request->sortBy == 'price')) {
            $products = $products->sortBy($request->sortBy);
        }
        return view('product-list', ['products' => $products]);
    }
}
