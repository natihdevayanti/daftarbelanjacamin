<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class BuyerController extends Controller
{
    public function buyerPage(){
        $products = Product::all(); 
        return view ('buyer', compact('products'));
    }
}
