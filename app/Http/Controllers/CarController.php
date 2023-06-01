<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{  
    // Show all cars
    public function index(Request $request) {
        return [
            'data' => 
               Car::all()  
        ];
    }

    // Show car by ID
    public function show($id) {
        return  [
            'data' => 
            Car::findOrFail($id)
        ];
    }

    //Creates a new car, setting the trip_count and trip_miles at 0
    public function store(Request $request) {
        
        $request->validate([
            'year' => 'required|integer',
            'make' => 'required|string',
            'model' => 'required|string'
        ]);

        $car = new Car();
        
        $car->year = request('year');
        $car->make = request('make');
        $car->model = request('model');
        $car->trip_count = 0;
        $car->trip_miles = 0;

        $car->save();

        return redirect('/');
    }

    public function destroy($id) {
        $car = Car::findOrFail($id);
        $car->delete();
    }
}
