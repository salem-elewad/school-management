<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SurveillantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'age' => $this->faker->numberBetween(12, 90),
            'specialite' => $this->faker->sentence(2),
        ];
    }
}
