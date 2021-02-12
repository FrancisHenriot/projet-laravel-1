<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
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
        $products = Product::query();
        if ($request->has('sortBy') && ($request->sortBy == 'name' || $request->sortBy == 'price')) {
            $products = $products->orderBy($request->sortBy);
        }
        if ($request->has('categorie')) {
            $products = $products->whereHas('categorie', function(Builder $query) use ($request){
                $query->where('id', $request->categorie);
            });

        }
        return view('product-list', ['products' => $products->get()]);
    }
}
