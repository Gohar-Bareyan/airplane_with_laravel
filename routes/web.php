<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return redirect('/management');
});

Route::resource('management', ManagementController::class);

Route::resource('flight', FlightController::class);

Route::get('flights/search', [FlightController::class, 'search'])->name('flights.search');

Route::resource('booking', BookingController::class);
