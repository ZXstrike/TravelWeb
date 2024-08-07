<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserTravel;
use App\Models\UserTravelOption;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\WithoutUrlPagination;

class BookingList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function deleteOrder($id)
    {
        UserTravelOption::where('user_travel_id', $id)->delete();

        UserTravel::find($id)->delete();
    }

    #[Title('Booking List')]
    public function render()
    {
        return view('livewire.booking-list', [
            'userTravels' =>  UserTravel::with('travel')->orderBy('id','desc')->paginate(15),
        ]);
    }
}
