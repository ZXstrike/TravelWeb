<?php

namespace Database\Factories;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TravelOption>
 */
class TravelOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(3),
            'description'=>fake()->sentence(10),
            'option_price'=>fake()->numberBetween(100000, 999999),
            'travel_id'=>Travel::factory(),
        ];
    }
}
