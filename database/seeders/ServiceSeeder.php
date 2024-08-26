<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        for ($i = 0; $i < 10; $i++) {
            Service::create([
                'title' =>fake()->sentence(3),
                'description' => fake()->paragraph,
                'icon' => fake()->randomElement(['fe fe-24 fe-check-circle', 'fe fe-24 fe-arrow-right', 'fe fe-24 fe-archive', 'fe fe-24 fe-alert-circle', 'fe fe-24 fe-copy'])
            ]);
        }
    }
    
}
