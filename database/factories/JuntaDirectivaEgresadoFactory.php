<?php

namespace Database\Factories;

use App\Models\JuntaDirectivaEgresado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JuntaDirectivaEgresado>
 */
class JuntaDirectivaEgresadoFactory extends Factory
{
    protected $model = JuntaDirectivaEgresado::class;
    public function definition(): array
    {
        return [
            'id_egresado' => $this->faker->unique()->numberBetween(1, 20),
            'tipo_cargo' => $this->faker->numberBetween(1, 10),
            'periodo' => $this->faker->word(10),
        ];
    }
}
