<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Egresado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'grado_instruccion',
        'especializacion',
        'fecha_egreso',
        'fecha_titulo',
        'fecha_maestria',
        'fecha_doctorado',
        'cargo_empresa',
        'tiempo_laboral',
        'id_empresa'
    ];
}
