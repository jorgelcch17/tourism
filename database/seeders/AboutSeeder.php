<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Image;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abouts = About::factory(1)->create();

        foreach($abouts as $about) {
            Image::create([
                'url' => 'images/about.jpg',
                'imageable_id' => $about->id,
                'imageable_type' => About::class,
            ]);
        }
    }
}
