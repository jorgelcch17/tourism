<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\TourismPlace;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $infocamiri = About::first();
        $rest = substr($infocamiri->body, 0, 500);

        $atractivos = TourismPlace::where('is_active', true)->take(3)->get();

        return view('home', compact('rest', 'atractivos'));
    }
}
