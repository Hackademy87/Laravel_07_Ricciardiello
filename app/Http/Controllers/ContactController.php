<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contatti');

    }

    public function newContact(Request $request){
        $nome = $request->input('name');
        $categoria = $request->input('category');
        $problema = $request->input('problem');

   $contactMail = new ContactMail($nome, $categoria, $problema);

        Mail::to('cine@blog.it')->send($contactMail);
return redirect()->route('home')->with('message','La mail è stata inviata con successo');

}



}
