@extends('adminlte::page')

@section('title', 'Actualizar Horario')

@section('content_header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<h1 class="text-center">Actualizar Horario</h1>
@stop

@section('content')
<div class="row">
    <div class="col">
        <form action="{{route('horarios.update', $gethorario->id)}}" class="w-50 m-auto text-center" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del Medico</label>
                <input type="email" class="form-control" name="txt-name" aria-describedby="emailHelp" value="{{$gethorario->nombre}}" readonly>
              </div>
              
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dias</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Lunes" name="flexCheckDefault[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Lunes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Martes" name="flexCheckDefault[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Martes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Miercoles" name="flexCheckDefault[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Miercoles
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Jueves" name="flexCheckDefault[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Jueves
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Viernes" name="flexCheckDefault[]">
                    <label class="form-check-label" for="flexCheckDefault">
                      Viernes
                    </label>
                  </div>
              </div>
              
              <label for="">Horas Disponibles</label>
              <div class="row">
                <div class="col">
                  <input type="time" name="txt-inicio" value="{{$gethorario->inicio}}">
                  <input type="time" name="txt-fin" value="{{$gethorario->fin}}">
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary" >Enviar</button>
              <a href="{{route('horarios.index')}}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>

@stop