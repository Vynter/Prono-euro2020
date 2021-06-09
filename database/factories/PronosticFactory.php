<?php

namespace Database\Factories;

use App\Models\Pronostic;
use Illuminate\Database\Eloquent\Factories\Factory;

class PronosticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pronostic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pronoD' => $this->faker->numberBetween(0, 3),
            'pronoE' => $this->faker->numberBetween(0, 3),
            'status_prono' => $this->faker->numberBetween(0, 2),
            'date_prono' => $this->faker->dateTimeBetween('now', '+01 days'),
            'user_id' => $this->faker->numberBetween(1, 2),
            'matche_id' => $this->faker->numberBetween(2, 4),
        ];
    }
}