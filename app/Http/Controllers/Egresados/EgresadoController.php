<?php

namespace App\Http\Controllers\Egresados;

use App\Http\Controllers\Controller;
use App\Models\Egresado;
use Illuminate\Http\Request;

class EgresadoController extends Controller
{
    // Metodo para la Pagina principal
    public function index() {
        $egresados = Egresado::all();
        return view('egresados.index', compact('egresados'));
    }

    // Metodo para crear un registro de seguimiento
    public function create() {
        return view('egresados.create');
    }

    // Metodo para mostrar los registros del egresado
    public function show(Egresado $egresado) {
        return view('egresados.show', compact('egresado'));
    }

    public function store(Request $request) {
        $egresado = new Egresado();

        $egresado->nombre = $request->nombre;
        $egresado->grado_instruccion = $request->grado_instruccion;
        $egresado->especializacion = $request->especializacion;
        $egresado->fecha_egreso = $request->fecha_egreso;
        $egresado->fecha_titulo = $request->fecha_titulo;
        $egresado->fecha_maestria = $request->fecha_maestria;
        $egresado->fecha_doctorado = $request->fecha_doctorado;
        $egresado->cargo_empresa = $request->cargo_empresa;
        $egresado->tiempo_laboral = $request->tiempo_laboral;
        $egresado->id_empresa = $request->id_empresa;

        $egresado->save();

        return redirect()->route('egresados.show', $egresado);
    }

    // Metodo para editar un registro de egresado
    public function edit(Egresado $egresado) {
        return view('egresados.edit', compact('egresado'));
    }

    // Metodo para editar un registro de egresado
    public function update(Request $request, Egresado $egresado) {
        $egresado->nombre = $request->nombre;
        $egresado->grado_instruccion = $request->grado_instruccion;
        $egresado->especializacion = $request->especializacion;
        $egresado->fecha_egreso = $request->fecha_egreso;
        $egresado->fecha_titulo = $request->fecha_titulo;
        $egresado->fecha_maestria = $request->fecha_maestria;
        $egresado->fecha_doctorado = $request->fecha_doctorado;
        $egresado->cargo_empresa = $request->cargo_empresa;
        $egresado->tiempo_laboral = $request->tiempo_laboral;
        $egresado->id_empresa = $request->id_empresa;

        $egresado->save();

        return redirect()->route('egresados.show', $egresado);
    }

    // Metodo para editar un registro de egresado
    public function destroy(Egresado $egresado) {
        $egresado->delete();

        return redirect()->route('egresados.index');
    }
}
