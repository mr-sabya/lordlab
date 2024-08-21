<?php

namespace Database\Seeders;

use App\Models\HomeService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        HomeService::create([
            'sub_heading' => 'SERVICE LIST',
            'heading' => 'Services We Can Help You With !',
            'text' => 'Vero id posuere tempus aspernatur quaerat mollis voluptatum eveniet porro viverra libero habitasse porro fames quos pharetra diam cupidatat ligula! Netus! Quos dignissi.',
            'feature_1' => 'Nobis ridiculus cupiditate egestas commodi.',
            'feature_2' => 'Ipsum dui curabitur dapibuish mollitia.',
        ]);
    }
}
