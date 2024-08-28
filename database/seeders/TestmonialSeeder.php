<?php

namespace Database\Seeders;

use App\Models\Testmonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestmonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Testmonial::create([
                'name' =>fake()->name(),
                'description' => fake()->paragraph,
                'position' => fake()->sentence(3),
            ]);
        }
    }
}
