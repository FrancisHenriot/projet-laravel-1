<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function showDetail($id)
    {


        $product = Product::find($id);
        return view('product-detail', ['product' => $product]);


    }


}
