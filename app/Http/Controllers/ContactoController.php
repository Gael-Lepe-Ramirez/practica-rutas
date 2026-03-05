<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

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

        $contacto = new Contacto();
        $contacto->nombre = $request->nombre; 
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect()->back(); 
    }

    public function listaContactos()
    {
        $contactos = Contacto::all();
        
        return view('lista-contactos', compact('contactos'));
    }
}
