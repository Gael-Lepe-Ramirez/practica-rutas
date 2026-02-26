<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formulario_contacto()
    {
        return view('formulario-contacto');
    }

    public function recibe_formulario()
    {
        return "Formulario recibido";
    }
}