<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ServiceCategory::factory(10)->create();
        foreach($categories as $category) {
            Image::create([
                'url' => 'images/service-category.jpg',
                'imageable_id' => $category->id,
                'imageable_type' => ServiceCategory::class,
            ]);
        }
    }
}
