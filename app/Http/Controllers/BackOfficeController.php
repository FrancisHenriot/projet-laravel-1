<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function showIndex(Request $request)
    {
        if ($request->has('search')) {
            $products = Product::where('name', 'like',  '%' . $request->filter . '%')->get();
            dd($products);
            return view('backoffice.product-list');
        } else {
            return view('backoffice.index');
        }
    }

    public function showForm()
    {
        return view('backoffice.newForm');
    }

    public function showList(Request $request)
    {
        $products = Product::where('name', '=', '*' . $request->filter, '*');
        dd($products);
        return view('backoffice.product-list');
    }

    public function addProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return view('backoffice.index');
    }
}
