<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function send(Request $request){
        die('contactcontroller@send');
        //dd($request->all());
    }

}
