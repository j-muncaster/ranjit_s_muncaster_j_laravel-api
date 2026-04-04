<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $snuggleCo = Brand::create([
            'brand_name' => 'SnuggleCo',
            'brand_description' => 'Soft, cuddly, and endlessly huggable. SnuggleCo brings comfort and joy to every snuggle.',
            'brand_country' => 'China',
            'brand_image_url' => 'images/snuggle.svg',
        ]);

        $brightMinds = Brand::create([
            'brand_name' => 'Bright Minds',
            'brand_description' => 'Stimulate little thinkers with Bright Minds’ smart, engaging toys designed to spark curiosity.',
            'brand_country' => 'Canada',
            'brand_image_url' => 'images/bright.svg',
        ]);

        $babyBloom = Brand::create([
            'brand_name' => 'Baby Bloom',
            'brand_description' => 'Gentle, natural, and full of charm. Baby Bloom helps your little one grow with love and care.',
            'brand_country' => 'Australia',
            'brand_image_url' => 'images/bloom.svg',
        ]);

        $timberToys = Brand::create([
            'brand_name' => 'Timber Toys',
            'brand_description' => 'Classic, sturdy, and timeless. Timber Toys crafts quality wooden toys built to last.',
            'brand_country' => 'Taiwan',
            'brand_image_url' => 'images/timber.svg',
        ]);
    }
}
