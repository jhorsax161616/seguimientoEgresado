<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->company,
            'representante' => $this->faker->name,
            'celular' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'rubro' => $this->faker->word,
        ];
    }
}
