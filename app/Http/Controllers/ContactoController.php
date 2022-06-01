<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function dataContact(Request $request)
    {
        //dd(request()->name)
        (!request()->name)
        ? $name='invitado'
        : $name = request()->name; //Operador ternario

        return view('contactos',compact('name'));
    }
}
