<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Travel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description'];

    public function createSlug($name)
    {
        $slug = Str::slug($name);
    }
}
