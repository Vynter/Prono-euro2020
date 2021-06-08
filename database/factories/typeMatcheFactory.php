<?php

namespace Database\Factories;

use App\Models\TypeMatche;
use Illuminate\Database\Eloquent\Factories\Factory;

class typeMatcheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TypeMatche::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(),

        ];
    }
}