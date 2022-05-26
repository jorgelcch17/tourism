<?php

namespace App\Http\Controllers;

use App\Models\TourismPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourismPlaceController extends Controller
{
    public function index()
    {
        return view('tourism-places.index');
    }

    public function show(TourismPlace $lugares_turistico)
    {
        // obteniendo 3 lugares turisticos aleatorio de la base de datos que esten is_active = true y que no sea el mismo que se esta viendo
        $sugerencias = TourismPlace::where('is_active', true)->where('id', '!=', $lugares_turistico->id)->inRandomOrder()->take(3)->get();
        // $sugerencias = TourismPlace::where('id','!=',$lugares_turistico->id)->and('is_active', true)->inRandomOrder()->take(3)->get();
        // $sugerencias = TourismPlace::where('id', '!=', $lugares_turistico->id)->get();
        return view('tourism-places.show', compact('lugares_turistico', 'sugerencias'));
    }
}
