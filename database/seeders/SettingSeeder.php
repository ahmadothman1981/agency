<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(['id' => 1], [
          'address' => 'Dhaka, Bangladesh',
          'phone' => '0123456789',
          'email' => '5zL2K@example.com',
          'facebook' => 'https://facebook.com',
          'twitter' => 'https://twitter.com',
          'instagram' => 'https://instagram.com',
          'youtube' => 'https://youtube.com',
          'linkedin' => 'https://linkedin.com',
          
        ]);
    }
}
