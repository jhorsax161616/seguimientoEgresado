<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ActaEgresado;
use App\Models\CronogramaEgresado;
use App\Models\Egresado;
use App\Models\Empresa;
use App\Models\EvaluacionEgresado;
use App\Models\EvaluacionTrabajo;
use App\Models\FormatoTipoEvaluacion;
use App\Models\JuntaDirectivaEgresado;
use App\Models\PlanTrabajo;
use App\Models\RequisitoEgresado;
use App\Models\Reunion;
use App\Models\TipoCargo;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);

        User::factory(10)->create();

        TipoCargo::factory(10)->create();
        EvaluacionTrabajo::factory(50)->create();
        CronogramaEgresado::factory(50)->create();
        FormatoTipoEvaluacion::factory(10)->create();
        Empresa::factory(25)->create();
        Egresado::factory(70)->create();
        EvaluacionEgresado::factory(10)->create();
        RequisitoEgresado::factory(10)->create();
        JuntaDirectivaEgresado::factory(10)->create();
        Reunion::factory(70)->create();
        PlanTrabajo::factory(10)->create();
        ActaEgresado::factory(10)->create();
    }
}
