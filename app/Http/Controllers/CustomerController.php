<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create($first_name, $last_name)
    {
        $customer = new Customer;
        $customer->first_name = $first_name;
        $customer->last_name = $last_name;
        $customer->save();
    }

    public function destroy()
    {
    }
}
