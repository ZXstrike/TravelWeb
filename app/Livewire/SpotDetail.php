<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class SpotDetail extends Component
{
    #[Title('Spot')]
    public function render()
    {
        return view('livewire.spot-detail');
    }
}
