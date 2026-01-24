<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
{
    use HasFactory;
    protected $table = 'tour_packages';  //table er name bole deowa protected $table = 'tour_packages';
    protected $fillable = [
        'tour_category_id',
        'title',
        'slug',
        'price',
        'duration',
        'location',
        'description',
        'image',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
