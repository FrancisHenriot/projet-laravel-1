<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBackofficePostRequest;
use App\Http\Requests\UpdateBackofficePostRequest;
use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function showIndex(Request $request)
    {
        $categories = Categorie::all();
        if ($request->has('search')) {
            $products = Product::where('name', 'like',  '%' . $request->filter . '%')->get();
            return view('backoffice.product-list', ['products' => $products, 'categories' => $categories]);
        } else {
            return view('backoffice.index', ['categories' => $categories]);
        }
    }

    public function showDetail(Product $product)
    {
        $categories = Categorie::all();
        return view('backoffice.product-detail', [
            'product' => $product,
            'categories' => $categories,
            'message' => 'Modification du produit Id : ' . $product->id
        ]);
    }

    public function create(StoreBackofficePostRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->categorie_id = $request->categorie_id;
        $product->save();
        $categories = Categorie::all();
        return view('backoffice.product-detail', [
            'product' => $product,
            'categories' => $categories,
            'message' => 'Le produit ' . $product->id . ' a bien été ajouté'
        ]);
    }

    public function modifyProduct(Product $product, UpdateBackofficePostRequest $request)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->categorie_id = $request->categorie_id;
        $product->save();
        $categories = Categorie::all();
        return view('backoffice.product-detail', [
            'product' => $product,
            'categories' => $categories,
            'message' => 'Le produit Id : ' . $product->id . ' a bien été modifié'
        ]);
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        $categories = Categorie::all();
        return view('backoffice.product-detail', [
            'product' => $product,
            'categories' => $categories,
            'message' => 'Le produit Id : ' . $product->id . ' a été supprimé'
        ]);
    }
}
