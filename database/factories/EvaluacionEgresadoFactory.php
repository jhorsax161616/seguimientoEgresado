<?php

namespace Database\Factories;

use App\Models\EvaluacionEgresado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluacionEgresado>
 */
class EvaluacionEgresadoFactory extends Factory
{
    protected $model = EvaluacionEgresado::class;
    public function definition(): array
    {
        return [
            'id_empresa' => $this->faker->numberBetween(1, 10),
            'id_formato' => $this->faker->numberBetween(1, 10),
        ];
    }
}
