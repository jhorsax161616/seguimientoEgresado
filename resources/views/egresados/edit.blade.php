@extends('adminlte::page')
@section('title', 'Creancion de Egresados')
    
@section('content_header')
    <h1>Aqui podras Editar un Registro de Egresado</h1>
@stop
@section('content')
<div class="container-fluid w-50">
<form method="post" action="{{ route('egresados.update', $egresado) }}">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$egresado->nombre}}" required>
    </div>

    <!-- Campo de Grado de Instrucción -->
    <div class="form-group">
        <label for="grado_instruccion">Grado de Instrucción:</label>
        <input type="text" class="form-control" name="grado_instruccion" id="grado_instruccion" value="{{$egresado->grado_instruccion}}" required>
    </div>

    <!-- Campo de Especialización -->
    <div class="form-group">
        <label for="especializacion">Especialización:</label>
        <input type="text" class="form-control" name="especializacion" id="especializacion" value="{{$egresado->especializacion}}" required>
    </div>

    <!-- Campo de Fecha de Egreso -->
    <div class="form-group">
        <label for="fecha_egreso">Fecha de Egreso:</label>
        <input type="date" class="form-control" name="fecha_egreso" id="fecha_egreso" value="{{$egresado->fecha_egreso}}" required>
    </div>

    <!-- Campo de Fecha de Título -->
    <div class="form-group">
        <label for="fecha_titulo">Fecha de Título:</label>
        <input type="date" class="form-control" name="fecha_titulo" id="fecha_titulo" value="{{$egresado->fecha_titulo}}" required>
    </div>

    <!-- Campo de Fecha de Maestría -->
    <div class="form-group">
        <label for="fecha_maestria">Fecha de Maestría:</label>
        <input type="date" class="form-control" name="fecha_maestria" id="fecha_maestria" value="{{$egresado->fecha_maestria}}" required>
    </div>

    <!-- Campo de Fecha de Doctorado -->
    <div class="form-group">
        <label for="fecha_doctorado">Fecha de Doctorado:</label>
        <input type="date" class="form-control" name="fecha_doctorado" id="fecha_doctorado" value="{{$egresado->fecha_doctorado}}" required>
    </div>

    <!-- Campo de Cargo en la Empresa -->
    <div class="form-group">
        <label for="cargo_empresa">Cargo en la Empresa:</label>
        <input type="text" class="form-control" name="cargo_empresa" id="cargo_empresa" value="{{$egresado->cargo_empresa}}" required>
    </div>

    <!-- Campo de Tiempo Laboral -->
    <div class="form-group">
        <label for="tiempo_laboral">Tiempo Laboral:</label>
        <input type="text" class="form-control" name="tiempo_laboral" id="tiempo_laboral" value="{{$egresado->tiempo_laboral}}" required>
    </div>

    <!-- Campo de ID de la Empresa -->
    <div class="form-group">
        <label for="id_empresa">ID de la Empresa:</label>
        <input type="number" class="form-control" name="id_empresa" id="id_empresa" value="{{$egresado->id_empresa}}" required>
    </div>
    <!-- Botón para enviar el formulario -->
    <button type="submit" class="btn btn-warning btn-sm btn-inline">Guardar</button>
</form>
</div>
@stop
@section('footer')
<a href="{{route('egresados.show', $egresado)}}">Regresar</a>
@stop