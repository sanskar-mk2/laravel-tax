<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 16; $i++) {
            Product::create(
                [
                    "name" => "Product$i",
                    "price" => $faker->randomFloat(2, 100, 10000)
                ]
            );
        }
    }
}
