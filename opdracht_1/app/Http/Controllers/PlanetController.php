<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::with('solar_system')->get();
        
        return view('planets.index', ['planets' => $planets]);
    }

    public function show($id)
    {
        $planet = Planet::with('solar_system')->findOrFail($id);
        
        return view('planets.show', ['planet' => $planet]);
    }
}