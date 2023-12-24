<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Bus;
use App\Models\SeatAlocation;

class SeatController extends Controller
{
    public function showSeats($tripId)
    {
        $trip = Trip::findOrFail($tripId);
        $seats = SeatAlocation::where('trip_id', $tripId)->get();

        return view('seats.show', compact('trip', 'seats'));
    }

    public function bookSeat(Request $request, $tripId)
    {
        $request->validate([
            'seat_number' => 'required|integer',
        ]);

        $user_id = auth()->user()->id;

        $seat = SeatAlocation::where('trip_id', $tripId)
            ->where('seat_number', $request->input('seat_number'))
            ->where('user_id', null)
            ->first();

        if ($seat && !$seat->is_booked) {
            $seat->update(['is_booked' => true, 'user_id' => $user_id]);

            return redirect()->back()->with('success', 'Seat booked successfully.');
        }

        return redirect()->back()->with('error', 'Seat already booked or not available.');
    }





    public function setAlocation(){
    
        $seatAlocations = SeatAlocation::paginate(10);
        $buses = Bus::all();
        $trips = Trip::all();

        return view('seats.seat_alocation', compact('seatAlocations', 'trips' ) );
    }

    public function store(Request $request){

        $request->validate([
            'seat_number' => 'required|integer|min:1',
            'trip_id' => 'required|exists:trips,id',
            'is_booked' => 'required|boolean',
        ]);

        // return $request;
        SeatAlocation::create($request->all());

        return redirect()->route('seats.index')->with('success', 'Seat Alocation added Successfully');
        
    }
}