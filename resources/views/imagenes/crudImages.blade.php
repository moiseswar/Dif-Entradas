@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<h1 class="text-center">Administracion de Imagenes</h1>
@stop

@section('content')
@if(session()->has('exito'))
 {!! "<script>
    Swal.fire(
        'Agregado',
        'Imagen Agregada',
        'success'
    )
 </script>"!!}
@endif
@if(session()->has('eliminado'))
 {!! "<script>
    Swal.fire(
        'Elimiando',
        'Imagen Eliminada',
        'success'
    )
 </script>"!!}
@endif
@include('imagenes.modalnsert')
<div class="continer">
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#modalInsert">Nueva Imagen</button>
        </div>
    </div>
    <div class="row">
        @foreach ($getimage as $image)
        <div class="card ml-2 float-left" style="width: 18rem;">
            <img src="{{asset($image->name)}}" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title">{{$image->titulo}}</h5>
              <h5 class="card-title">{{$image->name}}</h5>
              <p class="card-text"></p>
              <form action={{route('imagenes.destroy', $image->id)}} method="POST">
                @csrf
                <input type="hidden" name="name" value={{$image->name}}>
                  <button type="submit" class="btn btn-danger">Elimianr</button>
                </form> 
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