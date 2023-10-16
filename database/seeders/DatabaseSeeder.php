<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\AirplaneFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            CountrySeeder::class,
            AirplaneSeeder::class,
            FlightSeeder::class,
            CustomerSeeder::class
        ]);
    }
}
