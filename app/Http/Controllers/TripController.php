<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use Carbon\Carbon;

class TripController extends Controller
{
    public function index(Request $request) {

        return [
            'data' => 
                Trip::all()
                // [
                //     'id'  => 1,
                //     'date' => Carbon::now()->subDays(1)->format('m/d/Y'),
                //     'miles' => 11.3,
                //     'total' => 45.3,
                //     'car' => [
                //         'id' => 1,
                //         'make' => 'Land Rover',
                //         'model' => 'Range Rover Sport',
                //         'year' => 2017
                //     ]
                // ]
        ];
    }
    
    public function store(Request $request) {
        // $request->validate([
        //     'date' => 'required|date', // ISO 8601 string
        //     'car_id' => 'required|integer',
        //     'miles' => 'required|numeric'
        // ]);

        $trip = new Trip();
        
        $trip->date = Carbon::now()->format('m/d/Y');
        $trip->car_id = request('car_id');
        $trip->miles = request('miles');
  
        $trip->save();
    }
}
