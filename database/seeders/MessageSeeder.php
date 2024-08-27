<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Message::create([
                'name' =>fake()->name(),
                'email' => fake()->email,
                'subject' => fake()->sentence(3),
                'message' => fake()->paragraph
            ]);
        }
    }
}
