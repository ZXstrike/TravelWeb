<?php

namespace App\Livewire;

use App\Models\Travel;
use Livewire\Component;
use App\Models\UserTravel;
use App\Models\TravelOption;
use Livewire\Attributes\Title;
use App\Models\UserTravelOption;
use Illuminate\Support\Facades\Date;
use Livewire\Attributes\Validate;

class SpotDetail extends Component
{
    public Travel $travel;
    public $travel_options;

    public function mount(Travel $travel)
    {
        $this->travel = $travel;
        $this->participants = 1;
        $this->travel_options = TravelOption::where('travel_id', $travel->id)->get();

        $this->total = $this->travel->base_price * $this->participants;
    }
    #[Validate('required', message: '*Masukan Nama Lengkap')]
    public string $name;


    #[Validate('required', message: '*Masukan Nomor Telepon')]
    public string $phone;

    #[Validate('required', message: '*Masukan Tanggal Keberangkatan')]
    public string $date = '';

    public $optionals = [];

    #[Validate('required', message: '*Masukan Jumlah Peserta')]
    public int $participants;
    public $total;
    public $optionals_price = [];

    public function updated($propertyName)
    {
        if ($propertyName == 'participants' && is_null($this->participants)) {
            $this->participants = 1;
        }
    }

    public function calculateTotal()
    {
        $total = 0;
        $total += $this->travel->base_price;
        $this->optionals_price = [];
        foreach ($this->optionals as $optional) {
            $total += $this->travel_options->where('id', $optional)->first()->option_price;
            $this->optionals_price[$optional] = $this->travel_options->where('id', $optional)->first()->option_price;
        }
        $total *= $this->participants;
        $this->total = $total;
        $this->dispatch('refresh-the-component');
    }

    public function orderTravel()
    {

        $this->validate();

        $user_travel = new UserTravel();
        $user_travel->name = $this->name;
        $user_travel->phone = $this->phone;
        $user_travel->date = $this->date;
        $user_travel->participants = $this->participants;
        $user_travel->total = $this->total;
        $user_travel->travel_id = $this->travel->id;
        $user_travel->save();

        foreach ($this->optionals as $optional) {
            $user_travel_option = new UserTravelOption();
            $user_travel_option->user_travel_id = $user_travel->id;
            $user_travel_option->travel_option_id = $optional;
            $user_travel_option->save();
        }

        redirect()->to('/booking-list');
    }

    #[Title('Spot')]
    public function render()
    {
        return view('livewire.spot-detail');
    }
}
