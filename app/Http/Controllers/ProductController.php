<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('welcome',['products' => $products]);
    }
    public function register(){
        return view('system.register_product');
    }

    public function store(Request $request){

        $product = new Product;

        $product->name = $request->name;
        $product->quantity =  $request->quantity;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->description = $request->description;

        $product->save();

        return redirect('/');
    }
}