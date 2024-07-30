<?php

namespace App\Livewire;

use App\Models\Travel;
use Livewire\Component;
use Livewire\Attributes\Title;

class SpotDetail extends Component
{
    public Travel $travel;

    public function mount(Travel $travel)
    {
        $this->travel = $travel;
        $this->participans = 1;
    }

    public string $name;
    public string $phone;
    public int $date;
    public $optionals = [];
    public int $participans;
    public $total;

    public function updatedParticipans()
    {
        $this->total = $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $total = 0;
        $total += $this->travel->base_price;
        foreach ($this->optionals as $optional) {
            $total += $optional['price'];
        }
        $total *= $this->participans;
        return $total;
    }

    #[Title('Spot')]
    public function render()
    {
        $this->total = $this->calculateTotal();

        return view('livewire.spot-detail');
    }
}
