@extends('plantilla')



@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 pt-5">
                <a href="{{route('home')}}"><i class="fa fa-home"></i> Regresar</a>
            </div>
        </div>
        <div class="row justify-content-center p-3">
            <div class="col-8 bg-primary text-center p-2">
                <h2 class="text-white">Agregar contenido</h2>
            </div>
            <div class="col-8 shadow p-3">
                <form action="{{route('galeria.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label class="form-label mb-2" for="nombre">Nombre</label>
                      <input type="text" class="form-control mb-3" name="nombre" data-mdb-showcounter="true" maxlength="15" name="" id="nombre">
                    </div>
                    <div class="form-outline my-3">
                        <input
                          type="text"
                          id="form1"
                          class="form-control"
                          data-mdb-showcounter="true"
                          maxlength="20"
                          name="descripcion"
                        />
                        <label class="form-label" for="form1">Descripción</label>
                        <div class="form-helper"></div>
                      </div>
                    <div class="form-group">
                      <label for="" class="form-label mb-2">Sube tu imagen o video aqui</label>
                      <input type="file" class="form-control mb-3" name="archivo">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-block" type="submit">Agregar</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
@endsection