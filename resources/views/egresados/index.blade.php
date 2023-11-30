@extends('adminlte::page')
@section('title', 'Gestion de Egresados')
    
@section('content_header')
    <h1>Bienvenido a la seccion para administrar egresados</h1>
@stop
@section('content')
<div style="text-align: right;">
    <a id="nuevo_egresado" href="{{route('egresados.create')}}" class="btn btn-dark btn-sm btn-inline">
        <i class="fa fa-briefcase"></i> Nuevo Egresado
    </a>
</div>
<br>
<table class="table table-bordered table-hover dataTable dtr-inline collapsed">
    <thead>
        <tr>
            <th>Revisar</th>
            <th>Nombre</th>
            <th>Especializacion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($egresados as $egresado)
            <tr>
                <td>
                    <a href="{{route('egresados.show', $egresado->id)}}" class="btn btn-block btn-light">ver</a>
                </td>
                <td>{{$egresado->nombre}}</td>
                <td>{{$egresado->especializacion}}</td>
            </tr>

        @endforeach
    </tbody>
</table>
@stop
@section('footer')
<a href="{{route('gestionegresados', $egresado)}}">Regresar</a>
@stop