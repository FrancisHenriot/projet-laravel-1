<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ModifyProductController extends Controller

{
<<<<<<< HEAD
    public function edit()
=======
    public function create()
>>>>>>> 303d290e95cbf9361e036b9114578cae004e0dca
    {
        return view('modifyproduct');
    }

<<<<<<< HEAD




}


=======
		public function store(Request $request)
        {$product = new Product;
            $product->name=$request->name;
            $product->price=$request->price;
                    $product->category_id=$request->category_id;

                    $product->save();

        return view('formulairemodifyproduct');
    }
}
>>>>>>> 303d290e95cbf9361e036b9114578cae004e0dca
