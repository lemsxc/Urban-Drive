<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $table = 'car';

    protected $fillable = [
        'brand',
        'model',
        'category',
        'transmission',
        'plate_number',
        'mileage',
        'rent_price',
        'fuel_type',
        'fuel_level',
        'condition',
        'image',
        'status',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'car_id'); // Adjust foreign key as needed
    }

    // Relationship: A Car has many Feedbacks
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'car_id'); // Adjust foreign key as needed
    }
}
