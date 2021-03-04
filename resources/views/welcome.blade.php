@extends('plantilla')

@section('content')
    
@endsection
<div class="row">
  <div class="col-12">
    @if (session('mensaje'))
        <div class="alert alert-success">
          Elemento agregado
        </div>
    @endif
  </div>
</div>
<div class="row">
    <div class="col-12 bg-primary text-center p-3">
      <a href="{{route('galeria.create')}}" class="btn btn-success"><i class="fa fa-plus-square"></i>  Agregar</a>
    </div>
</div>
</div>

<div class="container mt-5">
<div class="row">
<div class="col-6  px-3 py-1 rounded" style="background-color:cornflowerblue;">
    <div class="row bg-white">
      <div class="col-4 p-2">
        <img src="img/messi.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-8 p-2">_
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta consequuntur ad officiis quia exercitationem ex .</p>
         <a href="{{route('detalles')}}" contenteditable="false" class="btn btn-success btn-block btn-sm">Visitar</a>
      </div>
    </div>
</div>
</div>
</div>
<!-- End your project here-->


<!-- Button trigger modal -->

