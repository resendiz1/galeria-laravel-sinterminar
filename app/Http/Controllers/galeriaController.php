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

         $ruta = request()->file('archivo')->store('Public');
         $nueva_ruta = substr($ruta, -45);
        

        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'archivo' => 'required'
        ]) ;

        Archivo::create([
            'name' => request('nombre'),
            'description' => request('descripcion'),
            'multimedia' => $nueva_ruta
        ]);


        return redirect()->route('home')->with('mensaje', 'Elemento agregado');

        
    }

    public function index(){
        $datos = Archivo::get();

        return view('welcome', compact('datos'));
    }
}
