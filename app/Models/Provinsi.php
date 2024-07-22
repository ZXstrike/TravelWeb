<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function destination():HasMany
    {
        return $this->hasMany(Destination::class, 'provinsi_id');
    }
}
