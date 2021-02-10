<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ModifyProductController extends Controller

{
    public function create()
    {
        return view('modifyproduct');
    }

		public function store(Request $request)
        {$product = new Product;
            $product->name=$request->name;
            $product->price=$request->price;
                    $product->category_id=$request->category_id;

                    $product->save();

        return view('formulairemodifyproduct');
    }
}
