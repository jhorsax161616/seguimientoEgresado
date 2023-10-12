<?php

namespace App\Http\Controllers\Egresados;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Metodo para la Pagina principal
    public function index() {
        return view('gestionegresados.index');
    }
}
