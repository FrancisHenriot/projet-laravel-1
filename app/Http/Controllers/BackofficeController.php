<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BackofficeController extends Controller

{
    public function show()
    {
        return view('formulaire');
    }
}
