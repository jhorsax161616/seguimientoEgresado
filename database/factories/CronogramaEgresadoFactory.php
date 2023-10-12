<?php

namespace Database\Factories;

use App\Models\CronogramaEgresado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CronogramaEgresado>
 */
class CronogramaEgresadoFactory extends Factory
{
    protected $model = CronogramaEgresado::class;
    public function definition(): array
    {
        return [
            'numero' => $this->faker->unique()->randomNumber(5),
            'actividad' => $this->faker->text(250),
            'fecha' => $this->faker->dateTimeThisYear,
            'periodo' => $this->faker->word(8),
        ];
    }
}
