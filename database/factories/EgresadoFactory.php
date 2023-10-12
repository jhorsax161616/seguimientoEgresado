<?php

namespace Database\Factories;

use App\Models\Egresado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Egresado>
 */
class EgresadoFactory extends Factory
{
    protected $model = Egresado::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'grado_instruccion' => $this->faker->jobTitle(),
            'especializacion' => $this->faker->jobTitle(),
            'fecha_egreso' => $this->faker->date,
            'fecha_titulo' => $this->faker->date,
            'fecha_maestria' => $this->faker->date,
            'fecha_doctorado' => $this->faker->date,
            'cargo_empresa' => $this->faker->jobTitle(),
            'tiempo_laboral' => $this->faker->word(),
            'id_empresa' => $this->faker->numberBetween(1, 10),
        ];
    }
}
