<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Banner::create([
            'sub_heading' => 'DIGITAL AGECY',
            'heading' => 'Digital Agency You Can Rely Upon !',
            'text' => 'Hymenaeos! Omnis arcu vitae? Phasellus irure cupidatat incidunt, semper metus, nibh adipisci assumenda odio, quos, senectus vehicula occaecat, officiis malesuada cras.',
            'image' => 'public/site/agency-img01.jpg',
            'button_1_text' => 'DISCOVER MORE',
            'button_1_link' => '#',
            'button_2_text' => 'HIRE US NOW',
            'button_2_link' => '#',
        ]);
    }
}
