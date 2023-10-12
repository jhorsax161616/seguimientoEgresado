@extends('adminlte::page')
@section('title', 'Practicas Preprofesionales')
    
@section('content_header')
    <h1>Bienvenido a la Getión de Egresados</h1>
    <div style="text-align: center;">
        <a href="{{route('egresado.create')}}">Ir a Otra Ruta</a>
    </div>
@stop