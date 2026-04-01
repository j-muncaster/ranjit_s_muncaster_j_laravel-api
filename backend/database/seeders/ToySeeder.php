<?php

namespace Database\Seeders;

use App\Models\Toy;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class ToySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $snuggleCo = Brand::where('brand_name', 'SnuggleCo')->first();
        $brightMinds = Brand::where('brand_name', 'Bright Minds')->first();
        $babyBloom = Brand::where('brand_name', 'Baby Bloom')->first();
        $timberToys = Brand::where('brand_name', 'Timber Toys')->first();

        Toy::create([
            'toy_name' => 'CuddleSoft Baby Bear',
            'toy_description' => 'Ultra-soft plush bear designed for infants.',
            'toy_price' => 16.99,
            'toy_brand' => $snuggleCo->id,
            'm_image_url' => 'images/teddy_bear_200.jpg',
            't_image_url' => 'images/teddy_bear_300.jpg',
            'l_image_url' => 'images/teddy_bear_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'CuddleSoft Baby Bunny',
            'toy_description' => 'Ultra-soft plush bunny designed for infants.',
            'toy_price' => 16.99,
            'toy_brand' => $snuggleCo->id,
            'm_image_url' => 'images/bunny_200.jpg',
            't_image_url' => 'images/bunny_300.jpg',
            'l_image_url' => 'images/bunny_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'CuddleSoft Baby Dino',
            'toy_description' => 'Ultra-soft plush dino designed for infants.',
            'toy_price' => 16.99,
            'toy_brand' => $snuggleCo->id,
            'm_image_url' => 'images/dinosaur_200.jpg',
            't_image_url' => 'images/dinosaur_300.jpg',
            'l_image_url' => 'images/dinosaur_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'Soft Stacking Rings',
            'toy_description' => 'Plush stacking rings with different textures and colours.',
            'toy_price' => 17.99,
            'toy_brand' => $snuggleCo->id,
            'm_image_url' => 'images/stacking_rings_200.jpg',
            't_image_url' => 'images/stacking_rings_300.jpg',
            'l_image_url' => 'images/stacking_rings_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'Stack & Build Soft Cubes',
            'toy_description' => 'Plush stacking cubes in different colours.',
            'toy_price' => 18.99,
            'toy_brand' => $snuggleCo->id,
            'm_image_url' => 'images/soft_blocks_200.jpg',
            't_image_url' => 'images/soft_blocks_300.jpg',
            'l_image_url' => 'images/soft_blocks_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'Peekaboo Mirror Toy',
            'toy_description' => 'Soft mirror toy that encourages self-recognition and sensory play.',
            'toy_price' => 14.99,
            'toy_brand' => $brightMinds->id,
            'm_image_url' => 'images/mirror_toy_200.jpg',
            't_image_url' => 'images/mirror_toy_300.jpg',
            'l_image_url' => 'images/mirror_toy_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'Wobble & Giggle Owl',
            'toy_description' => 'Weighted wobble toy that rocks back and forth to engage babies.',
            'toy_price' => 19.99,
            'toy_brand' => $brightMinds->id,
            'm_image_url' => 'images/wobble_owl_200.jpg',
            't_image_url' => 'images/wobble_owl_300.jpg',
            'l_image_url' => 'images/wobble_owl_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'First Blocks Starter Set',
            'toy_description' => 'Large, easy-grip blocks for early motor skill development.',
            'toy_price' => 21.99,
            'toy_brand' => $timberToys->id,
            'm_image_url' => 'images/letter_blocks_200.jpg',
            't_image_url' => 'images/letter_blocks_300.jpg',
            'l_image_url' => 'images/letter_blocks_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'My First Wooden Train',
            'toy_description' => 'Simple wooden train with large pieces for small hands.',
            'toy_price' => 27.99,
            'toy_brand' => $timberToys->id,
            'm_image_url' => 'images/wooden_train_200.jpg',
            't_image_url' => 'images/wooden_train_300.jpg',
            'l_image_url' => 'images/wooden_train_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'Toddler Kitchen Play Set',
            'toy_description' => 'Safe, rounded play kitchen with oversized accessories.',
            'toy_price' => 34.99,
            'toy_brand' => $timberToys->id,
            'm_image_url' => 'images/kitchen_set_200.jpg',
            't_image_url' => 'images/kitchen_set_300.jpg',
            'l_image_url' => 'images/kitchen_set_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'Roll & Chase Cars',
            'toy_description' => 'Chunky push-along vehicles for toddlers.',
            'toy_price' => 14.99,
            'toy_brand' => $babyBloom->id,
            'm_image_url' => 'images/bus_200.jpg',
            't_image_url' => 'images/bus_300.jpg',
            'l_image_url' => 'images/bus_335.jpg',
        ]);

        Toy::create([
            'toy_name' => 'Tiny Hero Teether Toy',
            'toy_description' => 'Soft teething toy shaped like a friendly hero.',
            'toy_price' => 9.99,
            'toy_brand' => $babyBloom->id,
            'm_image_url' => 'images/teether_200.jpg',
            't_image_url' => 'images/teether_300.jpg',
            'l_image_url' => 'images/teether_335.jpg',
        ]);
    }
}
