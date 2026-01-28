<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'location',
        'price_per_night',
        'description',
        'image',
        'rating',
        'contact_number',
        'email',
        'website',
        'status',
    ];
}
