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
        $request->validate([
            'nombre' => 'required',
            'grado_instruccion' => 'required',
            'especializacion' => 'required',
            'fecha_egreso' => 'required'
        ]);

        $egresado = Egresado::create($request->all());

        return redirect()->route('egresados.show', $egresado);
    }

    // Metodo para editar un registro de egresado
    public function edit(Egresado $egresado) {
        return view('egresados.edit', compact('egresado'));
    }

    // Metodo para editar un registro de egresado
    public function update(Request $request, Egresado $egresado) {
        $request->validate([
            'nombre' => 'required',
            'grado_instruccion' => 'required',
            'especializacion' => 'required',
            'fecha_egreso' => 'required'
        ]);
        $egresado->update($request->all());

        return redirect()->route('egresados.show', $egresado);
    }

    // Metodo para editar un registro de egresado
    public function destroy(Egresado $egresado) {
        $egresado->delete();

        return redirect()->route('egresados.index');
    }
}
