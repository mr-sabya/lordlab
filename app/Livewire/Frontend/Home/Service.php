<?php

namespace App\Livewire\Frontend\Home;

use App\Models\HomeService;
use Livewire\Component;

class Service extends Component
{
    public $home_service, $heading;

    public function mount()
    {
        $home_service = HomeService::where('id', 1)->first();
        $this->home_service = $home_service; 
        
        // Split the string and add span tag
        $text = $home_service->heading;
        $words = explode(' ', $text, 2);
        $words[0] = '<span class="title-highlight">'.$words[0].'</span>';

        // Reconstruct the string
        $this->heading = implode(' ', $words);

    }

    public function render()
    {
        return view('livewire.frontend.home.service');
    }
}
