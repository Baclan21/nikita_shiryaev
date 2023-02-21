<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class Product extends Controller
{
    public function product(){
        $cardprod=Product::all();
        return view('katalog',['a'=>$cardprod]);
    }
}
