<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

// Ruta del commit 2
Route::get('/hola-mundo', function () {
    return view('hola');
});

// Rutas del commit 3
Route::get('/formulario-contacto', [ContactoController::class, 'formulario_contacto']);
Route::post('/recibe-formulario', [ContactoController::class, 'recibe_formulario']);