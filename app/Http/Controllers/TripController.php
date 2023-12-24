<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Models\Trip;
use App\Models\Bus;
use App\Models\Location;
use Illuminate\Http\Request;


class TripController extends Controller
{

    public function home(){

        $buses = Bus::all();
        $locations = Location::all();
        $trips = Trip::all();
        return view('home', compact('trips', 'buses', 'locations'));
    }



    public function showTripsByDate(Request $request){

        $request->validate([
            'date' => 'required|date',
            'location_id_from' => 'required|exists:locations,id',
        ]);

        // Your logic to retrieve trips based on the input date and location
        $date = $request->input('date');
        $locationId = $request->input('location_id_from');
        
        $trips = Trip::where('date', $date)
            ->where('location_id_from', $locationId)
            ->get();

        // return $trips;

        return view('triplist', ['trips' => $trips]);
    }


    public function SeatCheck(id $id){
        
    }





    public function index(){
    
        $buses = Bus::all();
        $locations = Location::all();
        $trips = Trip::all();


        return view('trips.index', compact('trips', 'buses', 'locations') );
    }

    public function store(Request $request){

        $request->validate([
            'date' => 'required|date',
            'bus_id' => 'required|exists:buses,id',
            'location_id_from' => 'required|exists:locations,id',
            'location_id_to' => 'required|exists:locations,id',
            'total_seat' => 'required|integer',
        ]);

        // return $request;
        Trip::create($request->all());

        // return $request;

        return redirect()->route('trips.index')->with('success', 'Trips added Successfully');
        
    }

    // public function booktrip(){
    //     $trips = Trip::all();
    //     return view('triplist', compact('trips'));
    // }
}
