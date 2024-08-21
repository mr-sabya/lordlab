<?php

namespace App\Livewire\Frontend\Components;

use App\Models\FactSection;
use Livewire\Component;

class Fact extends Component
{
    public $fact, $heading;

    public function mount()
    {
        $fact = FactSection::where('id', 1)->first();
        $this->fact = $fact; 
        
        // Split the string and add span tag
        $text = $fact->heading;
        $words = explode(' ', $text, 2);
        $words[0] = '<span class="title-highlight">'.$words[0].'</span>';

        // Reconstruct the string
        $this->heading = implode(' ', $words);

    }


    public function render()
    {
        return view('livewire.frontend.components.fact');
    }
}
