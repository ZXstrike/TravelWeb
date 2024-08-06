<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserTravel;
use App\Models\TravelOption;
use Livewire\Attributes\Title;
use App\Models\UserTravelOption;

class EditOrder extends Component
{
    public UserTravel $user_travel;
    public $travel_options ;

    public $name;
    public $phone;
    public $date;
    public $participants;

    public $selected_optionals = [];
    public $optionals_price = [];

    public $total;

    public function mount(UserTravel $userTravel)
    {
        $this->user_travel = $userTravel;

        $this->name = $userTravel->name;
        $this->phone = $userTravel->phone;
        $this->date = $userTravel->date;
        $this->participants = $userTravel->participants;

        $this->travel_options = TravelOption::where('travel_id', $userTravel->travel->id)->get();
        $user_travel_option = UserTravelOption::where('user_travel_id', $userTravel->id)->get();

        foreach ($user_travel_option as $option) {
            $this->selected_optionals[] = $option->travel_option_id;
        }
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $total = 0;
        $total += $this->user_travel->travel->base_price;
        $this->optionals_price = [];
        foreach ($this->selected_optionals as $optional) {
            $total += $this->travel_options->where('id', $optional)->first()->option_price;
            $this->optionals_price[$optional] = $this->travel_options->where('id', $optional)->first()->option_price;
        }
        $total *= $this->participants;
        $this->total = $total;
        $this->dispatch('refresh-the-component');
    }

    public function updateTravel(){

        $this->user_travel->name = $this->name;
        $this->user_travel->phone = $this->phone;
        $this->user_travel->date = $this->date;
        $this->user_travel->participants = $this->participants;
        $this->user_travel->total = $this->total;
        $this->user_travel->save();

        UserTravelOption::where('user_travel_id', $this->user_travel->id)->delete();
        foreach ($this->selected_optionals as $optional) {
            UserTravelOption::create([
                'user_travel_id' => $this->user_travel->id,
                'travel_option_id' => $optional,
            ]);
        }

        redirect('/booking-list');

    }

    #[Title('Edit Order')]
    public function render()
    {
        return view('livewire.edit-order');
    }
}
