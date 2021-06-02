@extends('adminlte::page')

@section('title', 'Desayunos Escolares')

@section('content_header')
    <h1 >Desayunos Escolares</h1>Registro de Desayunos Escolares</h1>
@stop

@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(session()->has('exito'))
{!! "<script>Swal.fire(
  'Listo',
  'Registro almacenado con exito',
  'success'
)</script>"!!}
@endif
<form action="{{route('desayunos.store')}}" method="POST" class="w-75 m-auto">
    @csrf
    @if($errors->any())
    {!! "<script>Swal.fire(
      'Atencion',
      'Rellena todos los campos',
      'info'
    )</script>"!!}
    @endif
   
    <div class="mb-3">
      <label class="form-label">Nombre</label>
      <input type="text" class="form-control" name="txt-nombre" value="{{old('txt-nombre')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Direccion</label>
      <input type="text" class="form-control" name="txt-direccion" value="{{old('txt-direccion')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">CURP</label>
      <input type="text"  class="form-control text-uppercase" name="txt-curp" value="{{old('txt-curp')}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Escuela</label>
      <input type="text" class="form-control" name="txt-escuela" value="{{old('txt-escuela')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Clave Escolar</label>
        <input type="text" class="form-control text-uppercase" name="txt-clave" value="{{old('txt-clave')}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha de Nacimento</label>
        <input type="date" class="form-control" name="txt-fecha" value="{{old('txt-fecha')}}">
    </div>
    <div class="mb-3 ">
      <label class="form-label">Sexo</label>
      <select class="form-select" aria-label="Default select example" name="txt-sexo" value="{{old('txt-sexo')}}">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
    <div class="m-auto mb-2 w-50">
      <button type="submit" class="  btn btn-primary">Enviar</button>
      <a href=" {{route('dash')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
    </div> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop