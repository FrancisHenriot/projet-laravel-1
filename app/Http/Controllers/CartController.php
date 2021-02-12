<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;

class CartController extends Controller
{
    public function show(Order $order)
    {
        return view('cart', ['order' => $order]);
    }

}
