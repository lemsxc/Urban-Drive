<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name is 'reservation')
    protected $table = 'reservation';

    // The attributes that are mass assignable.
    protected $fillable = [
        'users_id',
        'car_id',
        'reserve_date',
        'start_date',
        'end_date',
        'return_date',
        'status',
    ];

    // Relationship: A Reservation belongs to one User
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');  // foreign key is 'users_id'
    }

    // Relationship: A Reservation belongs to one Car
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');  // foreign key is 'car_id'
    }
}
