<?php

namespace Database\Factories;

use App\Models\EvaluacionTrabajo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluacionTrabajo>
 */
class EvaluacionTrabajoFactory extends Factory
{
    protected $model = EvaluacionTrabajo::class;
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->text(300),
            'porcentaje_avance' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
