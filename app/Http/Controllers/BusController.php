<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use DB;

class BusController extends Controller
{

    public function index(){
        $buses = Bus::all();
        return view('buses.index', compact('buses'));
    }

    public function create(){
        return view('buses.create');
    }
    public function storeBus(Request $request){

    // Validate and store the product data
        $createbus = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);

        DB::table('buses')->insert([
            'name' => $createbus['name'],
            'status' => $createbus['status'],
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        return redirect()->route('buses.index')->with('success', 'Bus Name added successfully');
    }
}
