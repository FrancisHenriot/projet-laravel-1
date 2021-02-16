<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(Order $order)
    {
        return view('cart', ['order' => $order]);
    }

    public function update(Order $order, Request $request)
    {
        $product_id = $request->product_id;

        if ($request->has('add')) {
            $quantity = $order->products()->where('product_id', $product_id)->first()->pivot->quantity;
            $order->products()->updateExistingPivot($request->product_id, ['quantity' => $quantity + 1]);
        }

        if ($request->has('remove')) {
            $quantity = $order->products()->where('product_id', $product_id)->first()->pivot->quantity;
            if ($quantity - 1 <= 0) {
                $order->products()->where('product_id', $product_id)->first()->pivot->delete();
            } else {
                $order->products()->updateExistingPivot($request->product_id, ['quantity' => $quantity - 1]);
            }
        }

        if ($request->has('suppr')) {
            $order->products()->where('product_id', $product_id)->first()->pivot->delete();
        }

        return redirect()->back()->with('message', 'Panier mis à jour');
    }
}
