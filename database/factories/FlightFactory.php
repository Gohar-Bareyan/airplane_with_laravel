<?php

namespace Database\Factories;

use App\Models\Airplane;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(5),
            'from_country_id' =>  Country::inRandomOrder()->first(),
            'to_country_id' => function ($data) {
                return Country::where('id', '!=', $data['from_country_id'])->inRandomOrder()->first();
            },
            'datetime' => $this->faker->dateTime(),
            'airplane_id' => Airplane::inRandomOrder()->first()
        ];
    }
}
