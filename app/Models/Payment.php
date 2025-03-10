<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'payment';

    // The attributes that are mass assignable.
    protected $fillable = [
        'reservation_id',
        'rating',
        'payment_method',
        'payment_date',
        'status',
    ];

    // Relationship: A Payment belongs to one Reservation
    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation_id');  // Foreign key 'reservation_id'
    }
}
