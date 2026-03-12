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
            'nombre' => 'required',
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

    public function show(Contacto $contacto)
    {
        return view('contactos.contacto-show')
            ->with([
                'contacto' => $contacto
            ]);
    }

    public function edit(Contacto $contacto)
    {
        return view('contactos.contacto-edit')
            ->with([
                'contacto' => $contacto
            ]);
    }

    public function update(Request $request, Contacto $contacto)
    {
        $request->validate([
            'nombre' => 'required|min:3',
            'correo' => 'required|email',
            'mensaje' => 'required|min:10'
        ]);

        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect()->route('contactos.show', $contacto);
    }

    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return redirect()->route('contactos.index');
    }
}