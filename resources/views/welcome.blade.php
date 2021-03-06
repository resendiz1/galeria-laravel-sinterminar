@extends('plantilla')

@section('content')
    
@endsection
<div class="row">
  <div class="col-12">
    @if (session('mensaje'))
        <div class="alert alert-success">
         {{session('mensaje')}}
        </div>
    @endif
    @if (session('mensajeb'))
        <div class="alert alert-danger">
          {{session('mensajeb')}}
        </div>
    @endif
    @if (session('mensajeg'))
     <div class="alert alert-success">
       {{session('mensajeg')}}
     </div>
    @endif
    @if (session('editado'))
        <div class="alert alert-success">
          {{session('editado')}}
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

@forelse ($datos as $datosItem)
<div class="col-6  px-3 py-1 rounded" style="background-color:cornflowerblue;">
  <div class="row bg-white">
    <div class="col-4 p-2">
      <img src="{{Storage::URL($datosItem->multimedia)}}" class="img-fluid" alt="">
    </div>
    <div class="col-8 p-2">
      <h3>{{$datosItem->name}}</h3>
      <p>{{$datosItem->description}}</p>
       <a href="{{route('galeria.show', $datosItem)}}" contenteditable="false" class="btn btn-success btn-block btn-sm">Visitar</a>
    </div>
  </div>
</div>
@empty
    
@endforelse


</div>
</div>
<!-- End your project here-->


<!-- Button trigger modal -->

