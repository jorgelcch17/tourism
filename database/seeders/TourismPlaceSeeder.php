<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Tag;
use App\Models\TourismPlace;
use Illuminate\Database\Seeder;

class TourismPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = TourismPlace::factory(30)->create();

        foreach($places as $place) {
            Image::create([
                'url' => 'images/tourism_place.jpg',
                'imageable_id' => $place->id,
                'imageable_type' => TourismPlace::class,
            ]);
            $place->tags()->attach([
                rand(1, 10),
                rand(11, 20),
                rand(21, 30),
            ]);
        }

    }
}
