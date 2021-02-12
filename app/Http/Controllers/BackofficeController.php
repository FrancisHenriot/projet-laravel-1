<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class BackofficeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::query();
        if ($request->has('search')) {
            $products = Product::where('name', 'like', '%' . $request->filter . '%');
        }
        return view('pages.backoffice.products.index', ['products' => $products->get()]);
    }

    public function create(ProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('backoffice');
    }

    public function edit(Product $product)
    {
        $products = Product::all();
        return view('pages.backoffice.products.index', ['product' => $product, 'products' => $products]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('backoffice');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('backoffice');
    }
}
