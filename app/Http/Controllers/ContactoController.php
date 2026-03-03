<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function formulario_contacto()
    {
        return view('formulario-contacto');
    }

    public function recibe_formulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            'mensaje' => ['required', 'min:10'],
        ]);

        dd($request->all());
    }
}