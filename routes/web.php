<?php

use App\Livewire\HomePage;
use App\Livewire\EditOrder;
use App\Livewire\SpotDetail;
use App\Livewire\BookingList;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/spot-detail/{travel}/{slug}', SpotDetail::class);

Route::get('/booking-list', BookingList::class);

Route::get('/edit-order/{userTravel}', EditOrder::class);
