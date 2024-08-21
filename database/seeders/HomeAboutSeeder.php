<?php

namespace Database\Seeders;

use App\Models\HomeAbout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        HomeAbout::create([
            'sub_heading' => 'ABOUT US',
            'heading' => 'Introduction To Best Digital Agency!',
            'text' => 'Sint nascetur facere, delectus conubia consequuntur, nonummy distinctio! Non officiis, id natus non nisl provident justo.',
            'image' => 'public/site/agency-img2.jpg',
            'bottom_image' => 'public/site/agency-img15-800x533.jpg',
            'video_thumbnail' => 'public/site/agency-img16-500.jpg',
            'video' => 'IUN664s7N-c',
            'experience' => '24',
        ]);
    }
}
