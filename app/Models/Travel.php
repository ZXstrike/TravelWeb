<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'image', 'base_price', 'province_id'];

    public function createSlug($name)
    {
        $slug = Str::slug($name);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function travelOptions(): HasMany
    {
        return $this->hasMany(TravelOption::class);
    }
}
