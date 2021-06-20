@extends('pltbasica')
@section('contenido')
<div>
  <div class="w-50 m-auto">
    <h1 class="text-center">Registro de Ingresos </h1>
    <form action="{{route('entradas.store')}}" method="POST">
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
        <label class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" name="txt-apellidoP" value="{{old('txt-apellidoP')}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" name="txt-apellidoM" value="{{old('txt-apellidoM')}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="number" class="form-control" name="txt-telefono" value="{{old('txt-telefono')}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Comunidad</label>
        <input type="text" class="form-control" name="txt-comunidad" value="{{old('txt-comunidad')}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Motivo</label>
        <input type="text" class="form-control" name="txt-motivo" value="{{old('txt-motivo')}}">
      </div>
      <div class="mb-3">
        <label class="form-label">Division</label>
        <select class="form-select" aria-label="Default select example" name="txt-division" value="{{old('txt-division')}}">
          <option value="Juridico">Juridico</option>
          <option value="Psicologico">Psicologico</option>
          <option value="Medico Dental">Medico Dental</option>
          <option value="Medico Nutricional">medico Nutricional</option>
          <option value="Medico General">medico General</option>
          <option value="Estufas Ecologicas">Estufas Ecologicas</option>
          <option value="Apoyos Sociales">Apoyos Sociales</option>
          <option value="Desayunos Ecolares">Desyunos Ecolares</option>
          <option value="Apoyos Alimentarios">Apoyos Alimentarios</option>
          <option value="Programas Preventivos">Programas Preventivos</option>
        </select>
      </div>
      <div class="m-auto mb-2 w-50">
        <button type="submit" class="  btn btn-primary">Enviar</button>
        <a href="{{route('home')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
      </div>

    </form>
  </div>
</div>
@stop