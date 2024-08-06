<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserTravel extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'travel_id', 'travel_option_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function travel(): BelongsTo
    {
        return $this->belongsTo(Travel::class);
    }

    public function travelOption(): BelongsTo
    {
        return $this->belongsTo(TravelOption::class);
    }

}
