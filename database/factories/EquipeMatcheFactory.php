<?php

namespace Database\Factories;

use App\Models\EquipeMatche;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipeMatcheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EquipeMatche::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_equipe' => $this->faker->numberBetween(1, 4),
            'id_matche' => $this->faker->numberBetween(1, 2),
            'host' => $this->faker->numberBetween(0, 1),
        ];
    }
}