@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<h1 class="text-center">Centros Asistenciales</h1>
@stop

@section('content')
<div class="container">
    <div class="w-50 m-auto">
        <form action={{route('centros.edit',$getcentro->id)}} method="POST">
            @csrf
            <label for="" class="control-label" >Nombre</label>
            <input type="text" name="txt-nombre" id="" class="form-control" value={{$getcentro->nombre}}>
            <label for="" class="control-label">Domicilio</label>
            <input type="text" name="txt-domicilio" id="" class="form-control" value={{$getcentro->Direccion}}>
            <label for="" class="control-label">Telefono</label>
            <input type="number" name="txt-telefono" id="" class="form-control" value={{$getcentro->Telefono}}>
            <br>
            <div class="m-auto w-auto">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                
            </div>
        </form>
        <br>
        <a href={{route('centros.index')}}><button class="btn btn-danger">Cancelar</button></a>
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