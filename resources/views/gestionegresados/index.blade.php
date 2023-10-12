@extends('adminlte::page')
@section('title', 'Creancion de Egresados')
    
@section('content_header')
    <h1>Bienvenido a la Gestion de Egresados</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-md-6 mb-3">
            <a href="{{ route('egresados.index') }}" class="btn btn-info btn-lg btn-block">
                <i class="fa fa-graduation-cap"></i> Gestionar Egresados
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-info btn-lg btn-block">
                <i class="fa fa-calendar"></i> Gestionar Reuniones
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-secondary btn-lg btn-block">
                <i class="fa fa-business-time"></i> Gestionar Empresas
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-secondary btn-lg btn-block">
                <i class="fa fa-file"></i> Gestionar Formatos
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-info btn-lg btn-block">
                <i class="fa fa-user-tie"></i> Gestionar Cargos
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-info btn-lg btn-block">
                <i class="fa fa-list"></i> Gestionar Requisitos
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-dark btn-lg btn-block">
                <i class="fa fa-user-tie"></i> Juntas Directiva
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-dark btn-lg btn-block">
                <i class="fa fa-briefcase"></i> Plan de Trabajo
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-info btn-lg btn-block">
                <i class="fa fa-calendar"></i> Gestionar Cronogramas
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-info btn-lg btn-block">
                <i class="fa fa-check"></i> Evaluaciones de Trabajo
            </a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="#" class="btn btn-danger btn-lg btn-block">
                <i class="fa fa-book"></i> Actas de Egresados
            </a>
        </div>
    </div>
@stop
@section('footer')
@stop
