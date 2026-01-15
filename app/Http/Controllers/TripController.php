<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TripBookedMail;

class TripController extends Controller
{
    public function save_trip(Request $request)
    {
        $request->validate([
            'pickup_location' => 'required|string|max:255',
            'dropoff_location' => 'required|string|max:255',
            'pickup_date' => 'required|date',
            'passenger_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'level_of_service' => 'required|string|max:255',
        ]);

        $trip = Trip::create([
           'pickup_location' => $request->input('pickup_location'),
            'dropoff_location' => $request->input('dropoff_location'),
            'pickup_date' => Carbon::parse($request->input('pickup_date')),
            'level_of_service' => $request->input('level_of_service'),
            'passenger_name' => $request->input('passenger_name'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
        ]);

        Mail::to('dispatch@onsitedrive.com')->send(new TripBookedMail($trip));

        return redirect()->route('home')->with('success', 'Trip saved successfully!');
    }
}
