@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Desayunos Escolares</h1>Registro de Desayunos</h1>
@stop

@section('content')

<form action="{{route('desayunos.update',$desayunoInfo->id)}}" method="POST">
    @csrf

     <label for="">Nombre</label>
    <input type="text" class="form-control" name="txt-nombre"   value="{{$desayunoInfo->nombre}}">

     <label for="">Direccion</label>
     <input type="text" class="form-control" name="txt-direccion"   value="{{$desayunoInfo->direccion}}">

     <label for="">CURP</label>
     <input type="text" class="form-control text-uppercase" name="txt-curp"  value="{{$desayunoInfo->curp}}">

     
       <label for="">Escuela</label>
       <input type="text" class="form-control" name="txt-escuela"   value="{{$desayunoInfo->escuela}}">
       
     
  
     <label for="">Clave Escolar</label>
     <input type="text" class="form-control text-uppercase" name="txt-clave"   value="{{$desayunoInfo->clave}}">

     

     <center>
      <div class="">
          <button type="submit" class= "btn btn-success mt-2  ">Enviar</button>
      <a  class="btn btn-primary mt-2" href={{route('desayunos.index')}} role="button">Cancelar</a>   
      </div>
     </center>
        
     
  </form>
   
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@stop

@section('js')
    
@stop