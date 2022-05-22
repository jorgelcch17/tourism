<?php

namespace Database\Seeders;

use App\Models\TourismCategory;
use Illuminate\Database\Seeder;

class TourismCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TourismCategory::create([
            'name' => 'Sitios Naturales',
            'slug' => 'sitios-naturales',
        ]);
        TourismCategory::create([
            'name' => 'Museos y manifestaciones culturales historicas',
            'slug' => 'museos-y-manifestaciones-culturales-historicas',
        ]);
        TourismCategory::create([
            'name' => 'Etnia y Folklore',
            'slug' => 'etnia-y-folklore',
        ]);
        TourismCategory::create([
            'name' => 'Realizaciones tecnicas cientificas o artisticas contenporaneas',
            'slug' => 'realizaciones-tecnicas-cientificas-o-artisticas-contenporaneas',
        ]);
        TourismCategory::create([
            'name' => 'Acontecimientos programados',
            'slug' => 'acontecimientos-programados',
        ]);
    }
}
