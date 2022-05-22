<?php

namespace App\Http\Controllers;

use App\Models\TourismPlace;
use Illuminate\Http\Request;

class TourismPlaceController extends Controller
{
    public function index()
    {
        return view('tourism-places.index');
    }

    // funcion show para devolver un lugar turistico
    public function show(TourismPlace $lugares_turistico)
    {
        return view('tourism-places.show', compact('lugares_turistico'));
    }
}
