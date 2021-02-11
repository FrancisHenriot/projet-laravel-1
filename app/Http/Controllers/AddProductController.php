<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AddProductController extends Controller

{
    public function create()
    {
        return view('addproduct');
    }



		public function store(Request $request)
    {$product = new Product;
        $product->name=$request->name;
        $product->price=$request->price;
		$product->category_id=$request->category_id;

		$product->save();
        /*$data = [
            'product' => [
                'name' => $request->input('name'),


        ];*/
        return view('formulaireaddproduct', $product);
        //ici je dois récupérer le contenu de mon formulaire. Pour cela, je peux m'appuyer sur le mini-projet formulaire.
        //ici je dois utiliser mon model product pour insérer mon produit dans ma base de données
    }
}
