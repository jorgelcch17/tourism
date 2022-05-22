<?php

namespace App\Http\Livewire;

use App\Models\TourismCategory;
use App\Models\TourismPlace;
use Livewire\Component;

class PlacesIndex extends Component
{
    public function render()
    {
        $atractivos = TourismPlace::where('is_active', true)->paginate(12);
        $categorias = TourismCategory::all();
        return view('livewire.places-index', compact('atractivos', 'categorias'));
    }
}
