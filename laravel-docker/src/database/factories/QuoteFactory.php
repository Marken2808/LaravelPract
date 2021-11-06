<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quote' => $this->faker->sentence(),
            'historian' => $this->faker->name(),
            'year' => $this->faker->year(),
        ];
    }
}
