<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeguimientoController extends Controller
{
    // Metodo para la Pagina principal
    public function index() {
        return view('egresados.index');
    }

    // Metodo para crear un registro de seguimiento
    public function create() {

    }

    // Metodo para mostrar los registros del egresado
    public function showEgresados() {

    }
}
