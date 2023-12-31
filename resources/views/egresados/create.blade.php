@extends('adminlte::page')
@section('title', 'Creancion de Egresados')
    
@section('content_header')
    <h1>Aqui podras registrar Egresados</h1>
@stop
@section('content')
<div class="container-fluid w-50">
<form method="post" action="{{ route('egresados.store') }}">
    @csrf

        <!-- Campo de Nombre -->
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{old('nombre')}}" required>
            @error('nombre')
                <small class="text-danger">*{{$message}}</small>
            @enderror
        </div>
    
        <!-- Campo de Grado de Instrucción -->
        <div class="form-group">
            <label for="grado_instruccion">Grado de Instrucción:</label>
            <input type="text" class="form-control" name="grado_instruccion" id="grado_instruccion" value="{{old('grado_instruccion')}}" required>
            @error('grado_instruccion')
                <small class="text-danger">*{{$message}}</small>
            @enderror
        </div>
    
        <!-- Campo de Especialización -->
        <div class="form-group">
            <label for="especializacion">Especialización:</label>
            <input type="text" class="form-control" name="especializacion" id="especializacion" value="{{old('especializacion')}}" required>
            @error('especializacion')
                <small class="text-danger">*{{$message}}</small>
            @enderror
        </div>
    
        <!-- Campo de Fecha de Egreso -->
        <div class="form-group">
            <label for="fecha_egreso">Fecha de Egreso:</label>
            <input type="date" class="form-control" name="fecha_egreso" id="fecha_egreso" value="{{old('fecha_egreso')}}" required>
            @error('fecha_egreso')
                <small class="text-danger">*{{$message}}</small>
            @enderror
        </div>
    
        <!-- Campo de Fecha de Título -->
        <div class="form-group">
            <label for="fecha_titulo">Fecha de Título:</label>
            <input type="date" class="form-control" name="fecha_titulo" id="fecha_titulo" value="{{old('fecha_titulo')}}">
        </div>
    
        <!-- Campo de Fecha de Maestría -->
        <div class="form-group">
            <label for="fecha_maestria">Fecha de Maestría:</label>
            <input type="date" class="form-control" name="fecha_maestria" id="fecha_maestria" value="{{old('fecha_maestria')}}">
        </div>
    
        <!-- Campo de Fecha de Doctorado -->
        <div class="form-group">
            <label for="fecha_doctorado">Fecha de Doctorado:</label>
            <input type="date" class="form-control" name="fecha_doctorado" id="fecha_doctorado" value="{{old('fecha_doctorado')}}">
        </div>
    
        <!-- Campo de Cargo en la Empresa -->
        <div class="form-group">
            <label for="cargo_empresa">Cargo en la Empresa:</label>
            <input type="text" class="form-control" name="cargo_empresa" id="cargo_empresa" value="{{old('cargo_empresa')}}">
        </div>
    
        <!-- Campo de Tiempo Laboral -->
        <div class="form-group">
            <label for="tiempo_laboral">Tiempo Laboral:</label>
            <input type="text" class="form-control" name="tiempo_laboral" id="tiempo_laboral" value="{{old('tiempo_laboral')}}">
        </div>
    
        <!-- Campo de ID de la Empresa -->
        <div class="form-group">
            <label for="id_empresa">ID de la Empresa:</label>
            <input type="number" class="form-control" name="id_empresa" id="id_empresa" value="{{old('id_empresa')}}">
        </div>
    <!-- Botón para enviar el formulario -->
    <button id="guardar" type="submit" class="btn btn-info btn-sm btn-inline">Guardar</button>
</form>
</div>
@stop
@section('footer')
<a href="{{route('egresados.index')}}">Regresar</a>
@stop