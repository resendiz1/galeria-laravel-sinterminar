<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

class galeriaController extends Controller
{


    public function create(){
        return view('agregar');
    }

    public function store(){
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'archivo' => 'required'
        ]) ;

        Archivo::create([
            'name' => request('nombre'),
            'description' => request('descripcion'),
            'multimedia' => request('archivo')
        ]);


        return redirect()->route('home')->with('mensaje', 'Elemento agregado');

        
    }
}
