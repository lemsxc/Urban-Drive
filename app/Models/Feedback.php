<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'feedback';

    // The attributes that are mass assignable.
    protected $fillable = [
        'users_id',
        'car_id',
        'rating',
        'review',
        'date_review',
    ];

    // Relationship: A Feedback belongs to one User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');  // Foreign key 'users_id'
    }

    // Relationship: A Feedback belongs to one Car
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');  // Foreign key 'car_id'
    }
}
