<?php

namespace App\Livewire\Frontend\Home;

use App\Models\Banner as ModelsBanner;
use Livewire\Component;

class Banner extends Component
{
    public $banner, $heading;

    public function mount()
    {
        $banner = ModelsBanner::where('id', 1)->first();
        $this->banner = $banner; 
        
        // Split the string and add span tag
        $text = $banner->heading;
        $words = explode(' ', $text, 2);
        $words[0] = '<span class="title-highlight">'.$words[0].'</span>';

        // Reconstruct the string
        $this->heading = implode(' ', $words);

    }

    
    public function render()
    {
        return view('livewire.frontend.home.banner');
    }
}
