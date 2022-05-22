<?php

namespace Database\Factories;

use App\Models\TourismPlace;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'tourism_place_id' => TourismPlace::all()->random()->id,
        ];
    }
}
