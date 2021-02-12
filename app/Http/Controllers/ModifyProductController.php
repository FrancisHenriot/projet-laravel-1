<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ModifyProductController extends Controller

{
    public function edit($id)
    {
        $product = Product::find($id);
        return view('modifyproduct', ['product' => $product]);
        //ici je dois récupérer le contenu de mon formulaire. Pour cela, je peux m'appuyer sur le mini-projet formulaire.
        //ici je dois utiliser mon model product pour insérer mon produit dans ma base de données

    }


}


