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
            return view('backoffice.product-list', ['products' => $products]);
        } else {
            return view('backoffice.index');
        }
    }

    public function showDetail(Product $product)
    {
        return view('backoffice.product-detail', ['product' => $product, 'message' => 'Modification du produit Id : ' . $product->id]);
    }

    public function addProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return view('backoffice.product-detail', ['product' => $product, 'message' => 'Le produit ' . $product->id . ' a bien été ajouté']);
    }

    public function modifyProduct(Product $product, Request $request)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return view('backoffice.product-detail', ['product' => $product, 'message' => 'Le produit Id : ' . $product->id . ' a bien été modifié']);
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        return view('backoffice.product-detail', ['product' => $product, 'message' => 'Le produit Id : ' . $product->id . ' a été supprimé']);
    }
}
