<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Route;
use App\Models\ServiceCategory;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        Tag::factory(30)->create();
        $this->call(ServiceCategorySeeder::class);
        $this->call(TourismCategorySeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TourismPlaceSeeder::class);
        $this->call(TaskSeeder::class);
        Route::factory(100)->create();
        $this->call(AlbumSeeder::class);
        $this->call(AboutSeeder::class);
    }
}
