<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use Carbon\Carbon;

class TripController extends Controller
{

    // Having trouble getting the one to many relationship figured out in Laravel.
    // I need to figure out how to join the car table for the given trip.
    
    public function index(Request $request) {

        return [
            'data' => 
                Trip::all()
        ];
    }
    
    public function store(Request $request) {
        $trip = new Trip();
        
        $trip->date = Carbon::now()->format('m/d/Y');
        $trip->car_id = request('car_id');
        $trip->miles = request('miles');
  
        $trip->save();
    }
}
