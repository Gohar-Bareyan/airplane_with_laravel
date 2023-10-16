<?php

namespace Database\Seeders;

use App\Models\Airplane;
use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirplaneSeeder extends Seeder
{
    public function run(): void
    {
        Airplane::factory(5)->create();
    }
}
