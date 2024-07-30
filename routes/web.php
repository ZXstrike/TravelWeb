<?php

use App\Livewire\BookingList;
use App\Livewire\HomePage;
use App\Livewire\SpotDetail;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);

Route::get('/spot-detail/{travel}/{slug}', SpotDetail::class);

Route::get('/booking-list', BookingList::class);
