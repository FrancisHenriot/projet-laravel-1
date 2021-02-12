<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DeleteProductController extends Controller

{
    public function delete($id)
    {
        $product = Product::find($id);
        return view('deleteproduct', ['product' => $product]);
    }

    public function store(Request $request, $id)
    {

        $data = Product::find($id);

        $data->name=$request->name;
        $data->price=$request->price;
		$data->category_id=$request->category_id;


        $data->save();
        return view('formulairedelete');
    }
}
