<?php

namespace Database\Factories;

use App\Models\RequisitoEgresado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequisitoEgresado>
 */
class RequisitoEgresadoFactory extends Factory
{
    protected $model = RequisitoEgresado::class;
    public function definition(): array
    {
        return [
            'id_egresado' => $this->faker->unique()->numberBetween(1, 10),
            'estado' => $this->faker->numberBetween(0, 1), // Para representar valores binarios (0 o 1).
            'solicitud_decano' => $this->faker->text(200),
            'recibo' => $this->faker->text(200),
            'certificado' => $this->faker->text(255),
            'fotografia' => $this->faker->text(255),
            'certificado_ofimatica' => $this->faker->text(255),
        ];
    }
}
