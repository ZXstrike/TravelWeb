<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TravelOption extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'description', 'option_price', 'travel_id'];

    public function travel(): BelongsTo
    {
        return $this->belongsTo(Travel::class);
    }
}
