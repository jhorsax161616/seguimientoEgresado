@extends('adminlte::page')
@section('title', 'Gestion de Egresados')
    
@section('content_header')
    <h1>Bienvenido a la seccion para administrar egresados</h1>
    <br>
    <div style="text-align: right;">
        <a href="{{route('egresados.create')}}" class="btn btn-dark btn-sm btn-inline">
            <i class="fa fa-briefcase"></i> Nuevo Egresado
        </a>
    </div>
@stop
@section('content')
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Especializacion</th>
            <th>Revisar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($egresados as $egresado)
            <tr>
                <td>{{$egresado->nombre}}</td>
                <td>{{$egresado->especializacion}}</td>
                <td>
                    <a href="{{route('egresados.show', $egresado->id)}}">ver</a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
@stop
@section('footer')
<a href="{{route('gestionegresados', $egresado)}}">Regresar</a>
@stop