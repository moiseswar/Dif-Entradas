@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<h1 class="text-center">Centros Asistenciales</h1>
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
        'Centro Eliminado',
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
@include('centros.modalnsert')
<div class="continer">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#modalInsert">Nuevo Centro</button>
        </div>
    </div>
    <br><br> 
    <div class="row">
        @foreach ($getcentro as $centro)
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{$centro->nombre}}</h5>
              <p class="card-text">{{$centro->Direccion}}</p>
              <p class="card-text">{{$centro->Telefono}}</p>
              <div class="row">
                <form action={{route('centros.show', $centro->id)}} method="POST" class="col">
                  @csrf
                  <button type="submit" class="btn btn-primary">Editar</button>
                </form>
                <form action={{route('centros.destroy', $centro->id)}} method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger col">Eliminar</button>
                </form>
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