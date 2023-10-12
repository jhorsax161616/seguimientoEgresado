<?php

namespace Database\Factories;

use App\Models\PlanTrabajo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlanTrabajo>
 */
class PlanTrabajoFactory extends Factory
{
    protected $model = PlanTrabajo::class;
    public function definition(): array
    {
        return [
            'id_cronograma' => $this->faker->unique()->numberBetween(1, 50),
            'id_evaluacion' => $this->faker->unique()->numberBetween(1, 50),
            'id_egresado' => $this->faker->unique()->numberBetween(1, 50),
            'informe' => $this->faker->sentence(),
        ];
    }
}
