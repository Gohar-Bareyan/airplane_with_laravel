<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use App\Models\Country;
use App\Models\Flight;

class ManagementController extends Controller
{
    public function index()
    {
        $airplanes = Airplane::all();
        $countries = Country::all();
        return view('management.technique_management', ['airplanes' => $airplanes, 'countries' => $countries]);
    }

    public function show($airplane)
    {
        $airplane = Airplane::find($airplane);

        $flights = Flight::where('airplane_id', $airplane->id)->get();

        return view('management.detail', ['airplane' => $airplane, 'flights' => $flights]);
    }
}
