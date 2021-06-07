<?php

namespace Database\Factories;

use App\Models\Matche;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatcheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matche::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'scoreD' => $this->faker->numberBetween(0, 3),
            'scoreE' => $this->faker->numberBetween(0, 3),
            'status_matche' => $this->faker->numberBetween(0, 2),
            'date_matche' => $this->faker->dateTimeBetween('now', '+01 days'),
            'equipeD_id' => $this->faker->numberBetween(1, 4),
            'equipeE_id' => $this->faker->numberBetween(1, 4),
            'type_id' => $this->faker->numberBetween(1, 2)

        ];
    }
}