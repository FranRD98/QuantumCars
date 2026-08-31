<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class HomeController extends Controller
{
    public function index()
    {
        // Nº de vehículos publicados agrupados por tipo -> ['Compacto' => 5, ...]
        $typeCounts = Vehicle::where('published', 1)
            ->selectRaw('type, COUNT(*) as total')
            ->groupBy('type')
            ->pluck('total', 'type');

        return view('index', compact('typeCounts'));
    }
}
