@extends('adminlte::page')
@section('title', 'Creancion de Egresados')
    
@section('content_header')
    <h1>Datos del Egresado con código: </h1>
    <ul class="nav navbar-nav">
        <!-- Otras opciones de menú aquí -->
        <li class="nav-item">
            <a href="{{ route('egresados.edit', $egresado) }}">
                <i class="fa fa-pencil"></i> Editar
            </a>
        </li>
        <li class="nav-item">
            <form action="{{ route('egresados.destroy', $egresado) }}" method="post" style="display:inline;">
                @csrf
                @method('delete')
                <button type="submit" class="btn-link">
                    <i class="fa fa-trash"></i> Eliminar
                </button>
            </form>
        </li>
    </ul>
@stop
@section('content')
    <p><strong>Nombre:</strong> {{$egresado->nombre}}</p>
    <p><strong>Grado de Instrucción:</strong> {{$egresado->grado_instruccion}}</p>
    <p><strong>Especialización:</strong> {{$egresado->especializacion}}</p>
    <p><strong>Fecha de Egreso:</strong> {{$egresado->fecha_egreso}}</p>
    <p><strong>Fecha de Título:</strong> {{$egresado->fecha_titulo}}</p>
    <p><strong>Fecha de Maestría:</strong> {{$egresado->fecha_maestria}}</p>
    <p><strong>Fecha de Doctorado:</strong> {{$egresado->fecha_doctorado}}</p>
    <p><strong>Cargo en la Empresa:</strong> {{$egresado->cargo_empresa}}</p>
    <p><strong>Tiempo Laboral:</strong> {{$egresado->tiempo_laboral}}</p>
    <p><strong>ID de la Empresa:</strong> {{$egresado->id_empresa}}</p>
@stop
@section('footer')
<a href="{{route('egresados.index')}}">Regresar</a>
@stop
