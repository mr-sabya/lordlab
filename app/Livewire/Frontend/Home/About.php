<?php

namespace App\Livewire\Frontend\Home;

use App\Models\AboutFeature;
use App\Models\HomeAbout;
use Livewire\Component;

class About extends Component
{
    public $heading, $home_about;

    public function mount()
    {
        $home_about = HomeAbout::where('id', 1)->first();
        $this->home_about = $home_about; 
        
        // Split the string and add span tag
        $text = $home_about->heading;
        $words = explode(' ', $text, 2);
        $words[0] = '<span class="title-highlight">'.$words[0].'</span>';

        // Reconstruct the string
        $this->heading = implode(' ', $words);

    }

    public function render()
    {
        return view('livewire.frontend.home.about',[
            'features' => AboutFeature::all(),
        ]);
    }
}
