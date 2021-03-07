@extends('plantilla')

@section('contenido')
<div class="row mb-5">
    <div class="col-12 text-center mt-3 text-white rounded-pill" style="background-color: rebeccapurple">
      <h2>{{$datos->name}}</h2>
    </div>
  </div> 
  
  <div class="row mt-5">
    <div class="col-12 text-left mb-2">
        <a href="{{route('home')}}" class="btn btn-dark btn-sm"> <i class="fa fa-home mx-1"></i> Regresar</a>
        <a href="{{route('galeria.delete', $datos)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash mx-1"></i> Borrar</a>
        <a href="{{route('galeria.edit', $datos)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pen-alt mx-1"></i>Editar </a>
      </div>
    <div class="col-lg-5 col-md-8 col-sm-12 shadow rounded p-3">
      <a class="ripple" href="#">
      <img src="{{Storage::url($datos->multimedia)}}" class="img-fluid" alt="">
    </a>
    </div>
    <div class="col-4">{{$datos->description}}  </div>
  </div>
@endsection