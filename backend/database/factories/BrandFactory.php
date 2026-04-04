<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand_name' => fake()->unique()->words(2, true),
            'brand_description' => fake()->unique()->sentence(),
            'brand_country' => fake()->unique()->word(1, true),
            'brand_image_url' => 'images/placeholder_m.jpg',
        ];
    }
}
