<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(5),
            'surname' => $this->faker->name(5),
            'category_id' => Category::inRandomOrder()->first(),
            'flight_id' => Flight::inRandomOrder()->first()
        ];
    }
}
