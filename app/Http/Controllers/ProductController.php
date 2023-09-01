<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

public function welcome(){
    return view('welcome');
}




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



//MOSTRA DETTAGLI PRODOTTO


    public function show(Product $product){

        return view('products.show',compact('product'));
    

}




//MOSTRA PAGINA MODIFICA PRODOTTO


public function edit(Product $product){

    return view('products.edit',compact('product'));
    
    
    }



//MODIFICA IL PRODOTTO E AGGIORNA LE CARD


    public function updates(Product $product , Request $request){

        $product->update([
        $product->name = $request->name,
        $product->category = $request->category,
        $product->gender = $request->gender,
        $product->price = $request->price,
    
    
    
        ]);
    
// PER GESTIRE L IMMAGINE


    if($request->img){
        $product->update ([
            $product->img = $request->file('img')->store('public/product')
    
        ]);
    
        
    }
    return redirect()->route('admin.dashboard')->with('message',"il prodotto $product->name è stato modificato correttamente!");
    
    }

    //CANCELLARE CARD


    public function destroy(Product $product){
        $product->delete();
        
        return redirect()->route('admin.dashboard');
        
        
        }
        
}




