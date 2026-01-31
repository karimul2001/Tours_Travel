<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    use HasFactory;

    protected $table = 'tour_bookings'; 

    protected $fillable = [
        'tour_package_id',
        'user_id',
        'tour_date',
        'persons',
        'price_per_person',
        'total_price',
        'booking_status',
        'payment_status',
    ];

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}