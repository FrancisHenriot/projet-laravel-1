<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function showIndex()
    {
        return view('backoffice.index');
    }

    public function showForm()
    {
        return view('backoffice.newForm');
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
