<?php

namespace Database\Factories;

use App\Models\ActaEgresado;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActaEgresado>
 */
class ActaEgresadoFactory extends Factory
{
    protected $model = ActaEgresado::class;
    public function definition(): array
    {
        return [
            'id_reunion' => $this->faker->unique()->numberBetween(1, 70),
            'id_junta_directiva' => $this->faker->numberBetween(1, 10),
            'id_egresado' => $this->faker->unique()->numberBetween(1, 70),
            'resultado' => $this->faker->sentence(6),
            'firma_responsable' => $this->faker->word(),
        ];
    }
}
