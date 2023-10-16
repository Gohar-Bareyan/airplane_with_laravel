<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function show($flight)
    {
        $flight = Flight::find($flight);

        $customers = Customer::where('flight_id', $flight->id)->get();

        return view('management.flight_detail', ['flight' => $flight, 'customers' => $customers]);
    }

    public function search(Request $request)
    {
        $fromCountryId = $request->input('from_country');
        $toCountryId = $request->input('to_country');

        $flights = Flight::where('from_country_id', $fromCountryId)
            ->where('to_country_id', $toCountryId)
            ->get();

        return view('flights.index', ['flights' => $flights]);
    }
}
