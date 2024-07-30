<?php

namespace App\Livewire;

use App\Models\Travel;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\WithoutUrlPagination;

class HomePage extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search = '';

    public function searchTravel()
    {
        $this->resetPage();
    }

    #[Title('Home')]
    public function render()
    {
        return view('livewire.home-page', [
            'travels'=>Travel::where('name', 'like', '%'.$this->search.'%')->paginate(6)
        ]);
    }
}
