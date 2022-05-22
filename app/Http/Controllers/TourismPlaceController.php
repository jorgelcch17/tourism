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
}
