<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = Service::factory(30)->create();

        foreach($places as $place) {
            Image::factory(1)->create([
                'imageable_id' => $place->id,
                'imageable_type' => Service::class,
            ]);
        }
    }
}
