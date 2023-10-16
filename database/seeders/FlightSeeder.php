<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Customer;
use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    public function run(): void
    {
        Flight::factory(15)->create();
    }
}
