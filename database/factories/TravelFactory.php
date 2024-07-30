<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Travel>
 */
class TravelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->sentence(),
            'slug'=>Str::slug(fake()->sentence()),
            'image'=>fake()->imageUrl(),
            'description'=>fake()->paragraph(10),
            'base_price'=>fake()->numberBetween(1000000, 50000000)
        ];
    }
}
