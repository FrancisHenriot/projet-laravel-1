<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

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
            if ($quantity - 1 >= 1) {
                $order->products()->updateExistingPivot($request->product_id, ['quantity' => $quantity - 1]);
            }
        }

        if ($request->has('suppr')) {
            $order->products()->where('product_id', $product_id)->first()->pivot->delete();
        }

        return redirect()->back()->with('success', 'Panier mis à jour');
    }

    /* public function create(Request $request)
    {
        if (!Auth::check()) {
            app('App\Http\Controllers\CustomerController')->create('Guest', session()->getId());
            dd(session());
            $order = Order::query();
            $order = $order->whereHas('customer', function (Builder $query) use ($request) {
                $query->where('first_name', 'Ryan');
            });
            dd($order->get());
        }
    } */
}
