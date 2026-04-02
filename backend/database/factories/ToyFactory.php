<?php

namespace Database\Factories;

use App\Models\Toy;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Toy>
 */
class ToyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'toy_name' => fake()->unique()->words(2, true),
            'toy_description' => fake()->unique()->paragraph(),
            'toy_brand' => fake()->unique()->words(2, true),
            'toy_price' => fake()->unique()->randomFloat(2, 5, 100),
            'm_image_url' => 'images/placeholder_m.jpg',
            't_image_url' => 'images/placeholder_t.jpg',
            'l_image_url' => 'images/placeholder_l.jpg',
        ];
    }
}
