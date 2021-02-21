@extends('plantilla')

@section('content')
    
@endsection

<div class="row">
    <div class="col-12 bg-primary text-center p-3">
      <button class="btn btn-success"   type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal"> <i class="fa fa-plus-square"></i>  Agregar</button>
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
      <div class="col-8 p-2">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta consequuntur ad officiis quia exercitationem ex .</p>
         <a href="{{route('detalles')}}" class="btn btn-success btn-block btn-sm">Visitar</a>
      </div>
    </div>
</div>
</div>
</div>
<!-- End your project here-->


<!-- Button trigger modal -->


<!-- Modal -->
<div
class="modal fade"
id="exampleModal"
tabindex="-1"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header text-center bg-primary text-white justify-content-center">
<h5 class="modal-title text-uppercase" id="exampleModalLabel">Agregando</h5>
<button
  type="button"
  class="btn-close"
  data-mdb-dismiss="modal"
  aria-label="Close"
></button>
</div>
<div class="modal-body">
<form action="">
  <div class="form-group">
    <label for="" class="form-label mb-2">Nombre</label>
    <input type="text" class="form-control mb-3" name="" id="">
  </div>
  <div class="form-group">
    <label for="" class="form-label mb-2">Descripción</label>
    <input type="text" class="form-control mb-3">
  </div>
  <div class="form-group">
    <label for="" class="form-label mb-2">Sube tu imagen o video aqui</label>
    <input type="file" class="form-control mb-3">
  </div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
  Close
</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>