<?php

use Illuminate\Http\Request;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


//////////////////////////////////////////////////////////////////////////
/// Mock Endpoints To Be Replaced With RESTful API.
/// - API implementation needs to return data in the format seen below.
/// - Post data will be in the format seen below.
/// - /resource/assets/traxAPI.js will have to be updated to align with
///   the API implementation
//////////////////////////////////////////////////////////////////////////

// Endpoint to get all cars for the logged in user
Route::get('/get-cars', 'CarController@index')->middleware('auth:api');

// Endpoint to add a new car.
Route::post('/add-car', 'CarController@store')->middleware('auth:api');

// Endpoint to get a car with the given id
Route::get('/get-car/{id}', 'CarController@show')->middleware('auth:api');

// Endpoint to delete a car with a given id
Route::delete('/delete-car/{id}', 'CarController@destroy')->middleware('auth:api');


//Endpoint to get the trips for the logged in user
Route::get('/get-trips', 'TripController@index')->middleware('auth:api');


// Mock endpoint to add a new trip.
Route::post('/add-trip', 'TripController@store')->middleware('auth:api');
