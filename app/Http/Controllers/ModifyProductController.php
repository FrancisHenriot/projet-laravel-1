<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ModifyProductController extends Controller

{
    public function edit($id)
    {
        $id = Product::find($id);
        return view('modifyproduct', ['id'=>$id]);
    }





}


