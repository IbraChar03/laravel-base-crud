<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Saint>
 */
class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->firstName(),
            "birth_place" => fake()->city(),
            "blessing_date" => fake()->date(),
            "miracles_number" => fake()->numberBetween(0, 100)
        ];
    }
}