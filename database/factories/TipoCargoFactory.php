<?php

namespace Database\Factories;

use App\Models\TipoCargo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoCargo>
 */
class TipoCargoFactory extends Factory
{
    protected $model = TipoCargo::class;
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence(6),
        ];
    }
}
