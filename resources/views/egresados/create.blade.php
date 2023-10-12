@extends('adminlte::page')
@section('title', 'Creancion de Egresados')
    
@section('content_header')
    <h1>Aqui podras registrar Egresados</h1>
@stop
@section('content')
<form method="post" action="{{ route('egresados.store') }}">
    @csrf

    <!-- Campo de Nombre -->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <!-- Campo de Grado de Instrucción -->
    <label for="grado_instruccion">Grado de Instrucción:</label>
    <input type="text" name="grado_instruccion" id="grado_instruccion" required>
    <br>
    <!-- Campo de Especialización -->
    <label for="especializacion">Especialización:</label>
    <input type="text" name="especializacion" id="especializacion" required>
    <br>
    <!-- Otros campos aquí... -->

    <!-- Campo de Fecha de Egreso -->
    <label for="fecha_egreso">Fecha de Egreso:</label>
    <input type="date" name="fecha_egreso" id="fecha_egreso" required>
    <br>
    <!-- Campo de Fecha de Título -->
    <label for="fecha_titulo">Fecha de Título:</label>
    <input type="date" name="fecha_titulo" id="fecha_titulo" required>
    <br>
    <!-- Campo de Fecha de Maestría -->
    <label for="fecha_maestria">Fecha de Maestría:</label>
    <input type="date" name="fecha_maestria" id="fecha_maestria" required>
    <br>
    <!-- Campo de Fecha de Doctorado -->
    <label for="fecha_doctorado">Fecha de Doctorado:</label>
    <input type="date" name="fecha_doctorado" id="fecha_doctorado" required>
    <br>
    <!-- Campo de Cargo en la Empresa -->
    <label for="cargo_empresa">Cargo en la Empresa:</label>
    <input type="text" name="cargo_empresa" id="cargo_empresa" required>
    <br>
    <!-- Campo de Tiempo Laboral -->
    <label for="tiempo_laboral">Tiempo Laboral:</label>
    <input type="text" name="tiempo_laboral" id="tiempo_laboral" required>
    <br>
    <!-- Campo de ID de la Empresa -->
    <label for="id_empresa">ID de la Empresa:</label>
    <input type="number" name="id_empresa" id="id_empresa" required>
    <br>
    <!-- Botón para enviar el formulario -->
    <button type="submit">Guardar</button>
</form>
@stop
@section('footer')
<a href="{{route('egresados.index')}}">Regresar</a>
@stop