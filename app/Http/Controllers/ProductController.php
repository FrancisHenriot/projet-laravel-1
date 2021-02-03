<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showDetail($id)
    {
        return view('product-detail', ['id' => $id]);
    }

    public function showList()
    {
        $products = DB::select('select * from products');

        return view('product-list', ['products' => $products]);
    }
}
