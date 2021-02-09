<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showCat()
    {
        $products = DB::table('products')->get();

        return view('pages.catalog', compact('products'));
    }

    public function showDetails(int $id) {
        $product =\DB::table('products')->where('id', $id)->first();
        return view('pages.product', ['product'=>$product]);
    }
}
