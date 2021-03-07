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
    

    public function show($id){
        $datos = Archivo::find($id);

        return view('detalles', compact('datos'));
    }

    public function destroy($id){

        if(Archivo::destroy($id)){
            return redirect()->route('home')->with('mensajeg', 'Elemento borrado');
        }
        else{
            return redirect()->route('home')->with('mensajeb', 'No se borro el elemento');
        }
    }


    public function edit(Archivo $id){
        return view('editar', compact('id'));
    }

    public function update(Archivo $elemento){

       request()->validate([
           'nombre' =>'required',
           'descripcion' => 'required',
           'archivo' => 'required'
       ]);

       $ruta = request()->file('archivo')->store('public');
       $nueva_ruta = substr($ruta, -45);

       $elemento-> update([
           'name' => request('nombre'),
           'description' => request('descripcion'),
           'multimedia' => $nueva_ruta
       ]);

       return redirect()->route('home')->with('editado', 'Elemento editado');
    }
}
