<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Image;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = Album::factory(100)->create();

        foreach($albums as $album) {
            Image::create([
                'url' => 'images/album.jpg',
                'imageable_id' => $album->id,
                'imageable_type' => Album::class,
            ]);
        }
    }
}
