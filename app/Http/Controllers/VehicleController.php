<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Warranty;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    // Método para mostrar la lista de vehículos
    public function index()
    {
        $vehicles = Vehicle::all(); // Obtener todos los vehículos
        return view('car-list', compact('vehicles')); // Pasa los vehículos a la vista

    }

    // Método para mostrar la lista de vehículos
    public function adminIndex()
    {
        $vehicles = Vehicle::all(); // Obtener todos los vehículos
        return view('admin-panel.manage-cars', compact('vehicles')); // Pasa los vehículos a la vista

    }

    // Método para mostrar un vehículo específico
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id); // Buscar un vehículo por ID
        //$warranties = Warranty::where('vehicle_type', $vehicle->typeWarranty)->get();
        return view('car-detail', compact('vehicle')); // Pasa el vehículo a la vista
    }

    // Método para mostrar el formulario de creación de un nuevo vehículo
    public function create()
    {
        return view('admin-panel.vehicle-create'); // La vista con el formulario de creación
    }

    // Método para guardar un nuevo vehículo en la base de datos
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:2099',
            'color' => 'required|string|max:255',
            'fuel' => 'required|string',
            'mileage' => 'required|numeric',
            'transmission' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'description' => 'nullable|string',
            'fee' => 'required|numeric',
            'typeWarranty' => 'nullable|string|max:255',
            'published' => 'nullable|boolean',
            'available' => 'nullable|boolean',
        ]);

            // Establecer 'false' por defecto si no se envía valor para published y available
            $validated['published'] = $validated['published'] ?? false;
            $validated['available'] = $validated['available'] ?? false;

        // Procesamiento de imágenes
        $imagePaths = [];
        foreach (['image', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $imagePaths[$imageField] = $request->file($imageField)->store('vehicles-photos', 'public');
            } else {
                $imagePaths[$imageField] = null; // Si no hay imagen, asigna un valor nulo
            }
        }


        // Creación del nuevo vehículo en la base de datos
        $vehicle = Vehicle::create([
            'brand' => $validated['brand'],
            'model' => $validated['model'],
            'type' => $validated['type'],
            'year' => $validated['year'],
            'mileage' => $validated['mileage'],
            'transmission' => $validated['transmission'],
            'fuel' => $validated['fuel'],
            'color' => $validated['color'],
            'price' => $validated['price'],
            'image' => $imagePaths['image'],
            'image_1' => $imagePaths['image_1'],
            'image_2' => $imagePaths['image_2'],
            'image_3' => $imagePaths['image_3'],
            'image_4' => $imagePaths['image_4'],
            'image_5' => $imagePaths['image_5'],
            'description' => $validated['description'],
            'fee' => $validated['fee'],
            'typeWarranty' => $validated['type'],
            'published' => $validated['published'],
            'available' => $validated['available'],
        ]);


        // Redirige a la lista de vehículos con un mensaje de éxito
        return redirect()->route('vehicle.index')->with('success', 'Vehículo creado correctamente.');
    }
}
