@extends('plantilla')

@section('contenido')
<div class="row mb-5">
    <div class="col-12 text-center bg-danger mt-3 text-white rounded">
      <h2>Nombre</h2>
    </div>
  </div> 
  
  <div class="row mt-5">
      <div class="col-12 text-center mb-2">
        <a href="{{route('home')}}" class="btn btn-dark btn-sm"> <i class="fa fa-home mx-1"></i> Regresar</a>
      </div>
    <div class="col-8">
      <img src="img/messi.jpg" alt="">
    </div>
    <div class="col-4">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate, illum! Iusto debitis nemo architecto deleniti ullam molestiae possimus a sed, minus voluptatem minima beatae dolor ipsum obcaecati. Accusantium, excepturi quia.
    </div>
  </div>
@endsection