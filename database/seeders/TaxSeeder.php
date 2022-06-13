<?php

namespace Database\Seeders;

use App\Models\Tax;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 4; $i++) {
            Tax::create(
                [
                    "name" => $faker->city(),
                    "type" => "city",
                    "tax" => $faker->randomFloat(2, 0.01, 99.99)
                ]
            );
        }

        for ($i = 0; $i < 4; $i++) {
            Tax::create(
                [
                    "name" => $faker->state(),
                    "type" => "state",
                    "tax" => $faker->randomFloat(2, 0.01, 99.99)
                ]
            );
        }

        for ($i = 0; $i < 4; $i++) {
            Tax::create(
                [
                    "name" => $faker->country(),
                    "type" => "country",
                    "tax" => $faker->randomFloat(2, 0.01, 99.99)
                ]
            );
        }
    }
}
