<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        Country::factory(5)
            ->create();
    }
}
