<?php

namespace Database\Seeders;

use App\Models\FactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        FactSection::create([
            'sub_heading' => 'OUR GOAL',
            'heading' => 'Mission We Aim For You!',
            'text' => 'Sint nascetur facere, delectus conubia consequuntur, nonummy distinctio justo.',

            'counter_1' => 95,
            'counter_1_title' => 'Marketing',
            'counter_1_text' => 'Porro tincidunt duis tincidunt nostrum fais.',

            'counter_2' => 90,
            'counter_2_title' => 'Solution',
            'counter_2_text' => 'Porro tincidunt duis tincidunt nostrum fais.',

            'counter_3' => 96,
            'counter_3_title' => 'Success',
            'counter_3_text' => 'Porro tincidunt duis tincidunt nostrum fais.',
        ]);
    }
}
