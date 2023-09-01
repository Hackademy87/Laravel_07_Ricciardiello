<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

// CREA LISTA DEL FORM

public function create(){
    return view('products.create');
}


// CREA IL PRODOTTO SUL DATABASE

public function store(Request $request){
   Product::create([

    'name'=>$request->input('name'),
    'category'=>$request->input('category'),
    'price'=>$request->input('price'),
    'gender'=>$request->input('gender'),
    'img'=>$request->file('img')->store('public/product')

   ]);
   return redirect()->route('product.create')->with('message','Prodotto aggiunto con successo');
}



public function index(){
    $products = Product::oldest()->get();
    return view('products.index', compact('products'));
}




}
