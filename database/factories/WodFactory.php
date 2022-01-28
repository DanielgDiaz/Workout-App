<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name' => $this->faker->sentence,
           'free' => rand(0,1),

           'workout_id' => rand(1,10),
        ];
    }
}
