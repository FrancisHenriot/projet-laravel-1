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

    public function add(Order $order, Request $request)
    {
        $product_id = $request->product_id;
        if ($request->has('add')) {

            $quantity = $order->pivot->product_id;
            dd($quantity);
            $order->products()->updateExistingPivot($request->product_id, ['quantity' => +1]);
            dd($order);
            //$order->;
        }
        return redirect(back());
    }
}
