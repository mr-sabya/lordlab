<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutFeature;
use App\Models\Banner;
use App\Models\FactSection;
use App\Models\HomeAbout;
use App\Models\HomeService;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        if (!User::exists()) {
            User::factory()->create([
                'name' => 'Sabya Roy',
                'email' => 'sabya.citik@gmail.com',
                'password' => Hash::make('sabya12345'),
                'is_admin' => 1,
            ]);
        }

        if (!Banner::exists()) {
            $this->call([
                BannerSeeder::class,
            ]);
        }

        if (!HomeService::exists()) {
            $this->call([
                HomeServiceSeeder::class,
            ]);
        }

        if (!HomeAbout::exists()) {
            $this->call([
                HomeAboutSeeder::class,
            ]);
        }

        if (!AboutFeature::exists()) {
            $this->call([
                AboutFeatureSeeder::class,
            ]);
        }


        if (!FactSection::exists()) {
            $this->call([
                FactSectionSeeder::class,
            ]);
        }
    }
}
