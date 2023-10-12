<?php

namespace Database\Factories;

use App\Models\FormatoTipoEvaluacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormatoTipoEvaluacion>
 */
class FormatoTipoEvaluacionFactory extends Factory
{
    protected $model = FormatoTipoEvaluacion::class;
    public function definition(): array
    {
        return [
            'rubrica' => $this->faker->word(),
            'resultado' => $this->faker->randomFloat(2, 0, 100),
            'periodo' => substr($this->faker->word(), 0, 9),
        ];
    }
}
