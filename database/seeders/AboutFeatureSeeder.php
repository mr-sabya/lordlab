<?php

namespace Database\Seeders;

use App\Models\AboutFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        AboutFeature::create([
            'title' => 'Praesentium voluptatum dolores',
        ]);
        AboutFeature::create([
            'title' => 'Cillum nullam rem volutpat earum.',
        ]);
        AboutFeature::create([
            'title' => 'Odio doloribus lacus quaerat assum.',
        ]);
        AboutFeature::create([
            'title' => 'Natoque, cubilia eos ipsa, vehicula.',
        ]);
        AboutFeature::create([
            'title' => 'Cillum nullam rem volutpat earum.',
        ]);
        AboutFeature::create([
            'title' => 'Odio doloribus lacus quaerat assum.',
        ]);
    }
}
