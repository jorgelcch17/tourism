<?php

namespace Database\Factories;

use App\Models\TourismPlace;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->text(100),
            'tourism_place_id' => TourismPlace::all()->random()->id,
        ];
    }
}
