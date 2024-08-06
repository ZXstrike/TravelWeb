<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserTravelOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_travel_id',
        'travel_option_id',
    ];

    public function userTravel():BelongsTo
    {
        return $this->belongsTo(UserTravel::class);
    }
}
