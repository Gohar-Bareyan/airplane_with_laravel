<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Http\Resources\FlightResource;
use App\Models\Airplane;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Flight;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flights = FlightResource::collection(Flight::with('from_country', 'to_country', 'airplane')->get());
        $categories = Category::all();
        return view('booking.add', ['flights' => $flights, 'categories' => $categories]);
    }
    public function store(StoreBookingRequest $request)
    {
        $data = $request->validated();

        $flight_id = $data['flight_id'];
        $selectedFlight = Flight::find($flight_id);
        if (!$selectedFlight) {
            return redirect()->back()->with('error', 'Selected flight not found.');
        }

        $airplane = Airplane::find($selectedFlight->airplane_id);

        $customerCount = $selectedFlight->customers->count();
        $maxPassengerCount = $airplane->max_passenger_count;

        if ($customerCount >= $maxPassengerCount) {
            return redirect()->back()->with('error', 'No available seats on the selected flight.');
        }

        Customer::create($data);

        return redirect()->back()->with('booking', 'You successfully booked a flight');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
