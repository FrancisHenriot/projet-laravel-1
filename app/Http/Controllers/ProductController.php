<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*version qui récupère l'id comme un integer
    public function showDetail($id) //Product $product)
    {
        $product = Product::findOrFail($id);

        return view('product-detail', ['product' => $product]);
    }
    */

    /*version qui va directement créer un objet en rapport avec le modèle Product si il trouve l'id contenu dans la route*/
    public function showDetail(Product $product)
    {
        //$product = Product::findOrFail($id);

        return view('product-detail', ['product' => $product]);
    }


    public function showList(Request $request)
    {
        //$products = DB::select('select * from products');

        /*$products = DB::table('products')
            ->select('*')
            ->get();
        */
        $products = Product::all();
        if ($request->has('sortBy') && ($request->sortBy == 'name' || $request->sortBy == 'price')) {
            $products = $products->sortBy($request->sortBy);
        }
        return view('product-list', ['products' => $products]);
    }
}
