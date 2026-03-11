<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contactos.contacto-index')
            ->with([
                'contactos' => Contacto::all()
            ]);
    }

    public function create()
    {
        return view('contactos.contacto-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'correo' => 'required|email',
            'mensaje' => 'required|min:10'
        ]);

        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect()->route('contactos.index');
    }
}