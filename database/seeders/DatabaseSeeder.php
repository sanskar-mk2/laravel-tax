<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "admin",
            "email" => "admin@admin.com",
            "password" => bcrypt("password")
        ]);
        User::create([
            "name" => "test",
            "email" => "test@test.com",
            "password" => bcrypt("password")
        ]);
        Role::create([
            "user_id" => 1,
            "role" => "admin"
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            TaxSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
