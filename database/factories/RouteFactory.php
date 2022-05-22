<?php

namespace Database\Factories;

use App\Models\TourismPlace;
use Illuminate\Database\Eloquent\Factories\Factory;

class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start' => $this->faker->city,
            'end' => $this->faker->city,
            'transport' => $this->faker->randomElement(['bus', 'train', 'plane', 'a pie']),
            'time' => $this->faker->time('H:i'),
            'route' => $this->faker->address,
            'tourism_place_id' => TourismPlace::all()->random()->id,
        ];
    }
}
