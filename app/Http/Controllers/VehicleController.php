<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all(); // Obtener todos los vehículos

        return view('vehicle.index', compact('vehicles'));
    }

    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id); // Buscar un vehículo por ID

        return view('vehicle.show', compact('vehicle'));
    }
}
