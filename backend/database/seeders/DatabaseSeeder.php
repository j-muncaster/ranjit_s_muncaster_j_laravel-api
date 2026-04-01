<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Toy;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Brands

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $snuggleCo = Brand::create([
            'brand_name' => 'SnuggleCo',
            'brand_description' => 'Soft, cuddly, and endlessly huggable. SnuggleCo brings comfort and joy to every snuggle.',
            'location_manufactured' => 'China',
        ]);

        $brightMinds = Brand::create([
            'brand_name' => 'Bright Minds',
            'brand_description' => 'Stimulate little thinkers with Bright Minds’ smart, engaging toys designed to spark curiosity.',
            'location_manufactured' => 'Canada',
        ]);

        $babyBloom = Brand::create([
            'brand_name' => 'Baby Bloom',
            'brand_description' => 'Gentle, natural, and full of charm. Baby Bloom helps your little one grow with love and care.',
            'location_manufactured' => 'Australia',
        ]);

        $timberToys = Brand::create([
            'brand_name' => 'Timber Toys',
            'brand_description' => 'Classic, sturdy, and timeless. Timber Toys crafts quality wooden toys built to last.',
            'location_manufactured' => 'Taiwan',
        ]);

        // Toys

        Toy::create([
            'toy_name' => 'CuddleSoft Baby Bear',
            'toy_description' => 'Ultra-soft plush bear designed for infants.',
            'toy_price' => 16.99,
            'brand_id' => $snuggleCo->id,
        ]);

        Toy::create([
            'toy_name' => 'CuddleSoft Baby Bunny',
            'toy_description' => 'Ultra-soft plush bunny designed for infants.',
            'toy_price' => 16.99,
            'brand_id' => $snuggleCo->id,
        ]);

        Toy::create([
            'toy_name' => 'CuddleSoft Baby Dino',
            'toy_description' => 'Ultra-soft plush dino designed for infants.',
            'toy_price' => 16.99,
            'brand_id' => $snuggleCo->id,
        ]);

        Toy::create([
            'toy_name' => 'Soft Stacking Rings',
            'toy_description' => 'Plush stacking rings with different textures and colours.',
            'toy_price' => 17.99,
            'brand_id' => $snuggleCo->id,
        ]);

        Toy::create([
            'toy_name' => 'Stack & Build Soft Cubes',
            'toy_description' => 'Plush stacking cubes in different colours.',
            'toy_price' => 18.99,
            'brand_id' => $snuggleCo->id,
        ]);

        Toy::create([
            'toy_name' => 'Peekaboo Mirror Toy',
            'toy_description' => 'Soft mirror toy that encourages self-recognition and sensory play.',
            'toy_price' => 14.99,
            'brand_id' => $brightMinds->id,
        ]);

        Toy::create([
            'toy_name' => 'Wobble & Giggle Owl',
            'toy_description' => 'Weighted wobble toy that rocks back and forth to engage babies.',
            'toy_price' => 19.99,
            'brand_id' => $brightMinds->id,
        ]);

        Toy::create([
            'toy_name' => 'First Blocks Starter Set',
            'toy_description' => 'Large, easy-grip blocks for early motor skill development.',
            'toy_price' => 21.99,
            'brand_id' => $timberToys->id,
        ]);

        Toy::create([
            'toy_name' => 'My First Wooden Train',
            'toy_description' => 'Simple wooden train with large pieces for small hands.',
            'toy_price' => 27.99,
            'brand_id' => $timberToys->id,
        ]);

        Toy::create([
            'toy_name' => 'Toddler Kitchen Play Set',
            'toy_description' => 'Safe, rounded play kitchen with oversized accessories.',
            'toy_price' => 34.99,
            'brand_id' => $timberToys->id,
        ]);

        Toy::create([
            'toy_name' => 'Roll & Chase Cars',
            'toy_description' => 'Chunky push-along vehicles for toddlers.',
            'toy_price' => 14.99,
            'brand_id' => $babyBloom->id,
        ]);

        Toy::create([
            'toy_name' => 'Tiny Hero Teether Toy',
            'toy_description' => 'Soft teething toy shaped like a friendly hero.',
            'toy_price' => 9.99,
            'brand_id' => $babyBloom->id,
        ]);
    }
}
