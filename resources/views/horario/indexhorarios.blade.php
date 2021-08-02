@extends('adminlte::page')

@section('title', 'Horarios')

@section('content_header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<h1 class="text-center">Horarios Medicos</h1>
@stop

@section('content')
@if(session()->has('exito'))
 {!! "<script>
    Swal.fire(
        'Agregado',
        'Centro Agregado',
        'success'
    )
 </script>"!!}
@endif
@if(session()->has('eliminado'))
 {!! "<script>
    Swal.fire(
        'Elimiando',
        'Horario Eliminado',
        'success'
    )
 </script>"!!}
@endif
@if(session()->has('editado'))
 {!! "<script>
    Swal.fire(
        'Editado',
        'Datos Editados',
        'success'
    )
 </script>"!!}
@endif
@include('horario.modalnsert')
<div class="continer">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#modalInsert">Nuevo</button>
        </div>
    </div>
    <br><br> 
    <div class="row">
        @foreach ($gethorario as $horario)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Dr. {{$horario->nombre}}</h5>
                  <p class="card-text">Area: {{$horario->area}}</p>
                  <p class="card-text">Dias Disponibles: {{$horario->dias}}</p>
                  <p class="card-text">Horario</p>
                  <div class="row">
                      <div class="col">
                          <input type="time" name="" id="" value="{{$horario->inicio}}" class="form-control" readonly>
                        </div>
                    <div class="col">
                        <input type="time" name="" id="" value="{{$horario->fin}}" class="form-control" readonly>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                      <div class="col-6">
                          <a href="{{route('horarios.edit',$horario->id)}}" class="btn btn-success">Actualizar</a>
                        </div>
                      <div class="col-6">
                          <form action="{{route('horarios.delete' ,$horario->id)}}" method="post">
                            @csrf
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                          </form>
                      </div>
                  </div>
                </div>
              </div>
        </div>   
        @endforeach
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