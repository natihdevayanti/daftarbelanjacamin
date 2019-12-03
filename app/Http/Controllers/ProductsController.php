<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function cart(){
        return view('cart');
    }

    public function addToCart ($id){
        $product = Product::find($id);
        // dd($product);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // dd($cart);
        // jika cart kosong maka inilah first productnya 
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
 
            session()->put('cart', $cart); //simpan data d tabel
 
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
        }
 
        // jika cartnya tidak kosong maka cek apakah produk ini ada lalu increment quantity 
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart); 
 
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
 
        }
 
        // jika itemnya gaada di cart maka add ke cart dengan kuantitas 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }


    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Troli berhasil diupdate!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Produk berhasil dihapuskan!');
        }
    }
    }

