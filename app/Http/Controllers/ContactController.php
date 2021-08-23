<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailable;


class ContactController extends Controller
{
    
    public function store(ContactRequest $request){
        
        $mail = new ContactMailable($request->all());

        // Envío de correo al destinatario
        Mail::to($request->email)->send($mail);



        /**
         * Creamos un array para enviar una copia
         * del correo a nuestras direcciones
         */
        $array = array(
            'ger.cs28@gmail.com',
            'ger.cs@hotmail.com'
        );

        foreach($array as $arr){
            Mail::to($arr)->send($mail);
        }

    
       //return redirect()->route('contact.index');

       dd('envia2');

       
    }

}
