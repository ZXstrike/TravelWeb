<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TravelOption extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function travel(): HasMany
    {
        return $this->hasMany(Travel::class, 'travel__id');
    }
}
