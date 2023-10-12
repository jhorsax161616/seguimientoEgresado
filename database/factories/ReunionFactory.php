<?php

namespace Database\Factories;

use App\Models\Reunion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reunion>
 */
class ReunionFactory extends Factory
{
    protected $model = Reunion::class;
    public function definition(): array
    {
        return [
            'id_egresado' => $this->faker->numberBetween(1, 50),
            'fecha' => $this->faker->dateTimeThisYear,
            'lugar' => $this->faker->city(),
            'agenda' => $this->faker->sentence(6),
            'objetivo' => $this->faker->sentence(6),
        ];
    }
}
