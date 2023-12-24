<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAlocation extends Model
{
    use HasFactory;
    protected $fillable = ['trip_id', 'user_id', 'seat_number', 'is_booked'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
