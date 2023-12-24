<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'transection_no', 'bus_id', 'location_id_from', 'location_id_to', 'total_seat'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($trip) {
            // Get the next auto-incremented ID
            $nextId = \DB::table('trips')->max('id') + 1;
            
            // Set the 'transection_no' based on the auto-incremented ID
            $trip->transection_no = 'TR' . str_pad($nextId, 2, '0', STR_PAD_LEFT);
        });
    }


    public function bus()
    {
        return $this->belongsTo(Bus::class, 'bus_id');
    }

    public function locationFrom()
    {
        return $this->belongsTo(Location::class, 'location_id_from');

    }

    public function locationTO()
    {
        return $this->belongsTo(Location::class, 'location_id_to');

    }

    public function seats()
    {
        return $this->hasMany(SeatAlocation::class);
    }


    
}
