<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use ACME\HelloWorld\Models\MyProduct;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Generate a fake image URL
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            MyProduct::create([
                'name' => $faker->sentence(3), // Generate a random product name
                'description' => $faker->paragraph,
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 100),
                'image' => $faker->imageUrl(), // Generate a fake image URL
            ]);
        }
    }
}


