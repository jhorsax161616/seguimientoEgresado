@extends('adminlte::page')
@section('title', 'Gestion de Egresados')
    
@section('content_header')
    <h1>Bienvenido a la Getión de Egresados</h1>
    <div style="text-align: center;">
        <a href="{{route('egresados.create')}}">Nuevo Egresado</a>
    </div>
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