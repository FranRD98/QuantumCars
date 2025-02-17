<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Booking;

use Illuminate\Http\Request;
class VehicleController extends Controller
{
    // Método para mostrar la lista de vehículos
    public function index() {
        $vehicles = Vehicle::orderBy('price', 'asc')->get(); // Ordenar por precio de menor a mayor
    
        // Obtener valores únicos para los filtros
        $brands = Vehicle::select('brand')->distinct()->pluck('brand')->sort();
        $types = Vehicle::select('type')->distinct()->pluck('type')->sort();
        $years = Vehicle::select('year')->distinct()->pluck('year')->sortDesc(); // Ordenar años de mayor a menor
        $fuels = Vehicle::select('fuel')->distinct()->pluck('fuel')->sort();
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission')->sort();
        $prices = Vehicle::select('price')->distinct()->pluck('price')->sort();
    
        return view('car-list', compact('vehicles', 'brands', 'types', 'years', 'fuels', 'transmissions', 'prices'));
    }
    

    // Método para mostrar la lista de vehículos
    public function adminIndex(){
        $vehicles = Vehicle::orderBy('brand', 'asc')->get(); // Ordenar por precio de menor a mayor

        return view('admin-panel.cars.manage-cars', compact('vehicles')); // Pasa los vehículos a la vista
    }

    public function indexBrand($brand){
        $vehicles = Vehicle::where('brand', $brand)
            ->orderBy('price', 'asc') // Ordenar por precio de menor a mayor
            ->get();

        // Obtener valores únicos para los filtros
        $brands = Vehicle::select('brand')->distinct()->pluck('brand')->sort();
        $types = Vehicle::select('type')->distinct()->pluck('type')->sort();
        $years = Vehicle::select('year')->distinct()->pluck('year')->sortDesc(); // Ordenar años de mayor a menor
        $fuels = Vehicle::select('fuel')->distinct()->pluck('fuel')->sort();
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission')->sort();
        $prices = Vehicle::select('price')->distinct()->pluck('price')->sort();

        return view('car-list', compact('vehicles', 'brands', 'types', 'years', 'fuels', 'transmissions', 'prices'));
    }

    public function indexType($type){
        $vehicles = Vehicle::where('type', $type)
            ->orderBy('price', 'asc') // Ordenar por precio de menor a mayor
            ->get();

        // Obtener valores únicos para los filtros
        $brands = Vehicle::select('brand')->distinct()->pluck('brand')->sort();
        $types = Vehicle::select('type')->distinct()->pluck('type')->sort();
        $years = Vehicle::select('year')->distinct()->pluck('year')->sortDesc(); // Ordenar años de mayor a menor
        $fuels = Vehicle::select('fuel')->distinct()->pluck('fuel')->sort();
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission')->sort();
        $prices = Vehicle::select('price')->distinct()->pluck('price')->sort();

        return view('car-list', compact('vehicles', 'brands', 'types', 'years', 'fuels', 'transmissions', 'prices'));
    }

    public function indexYear($year){
        $vehicles = Vehicle::where('year', $year)
            ->orderBy('price', 'asc') // Ordenar por precio de menor a mayor
            ->get();

        // Obtener valores únicos para los filtros
        $brands = Vehicle::select('brand')->distinct()->pluck('brand')->sort();
        $types = Vehicle::select('type')->distinct()->pluck('type')->sort();
        $years = Vehicle::select('year')->distinct()->pluck('year')->sortDesc(); // Ordenar años de mayor a menor
        $fuels = Vehicle::select('fuel')->distinct()->pluck('fuel')->sort();
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission')->sort();
        $prices = Vehicle::select('price')->distinct()->pluck('price')->sort();

        return view('car-list', compact('vehicles', 'brands', 'types', 'years', 'fuels', 'transmissions', 'prices'));
    }


    public function indexFuel($fuel){
        $vehicles = Vehicle::where('fuel', $fuel)
            ->orderBy('price', 'asc') // Ordenar por precio de menor a mayor
            ->get();

        // Obtener valores únicos para los filtros
        $brands = Vehicle::select('brand')->distinct()->pluck('brand')->sort();
        $types = Vehicle::select('type')->distinct()->pluck('type')->sort();
        $years = Vehicle::select('year')->distinct()->pluck('year')->sortDesc(); // Ordenar años de mayor a menor
        $fuels = Vehicle::select('fuel')->distinct()->pluck('fuel')->sort();
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission')->sort();
        $prices = Vehicle::select('price')->distinct()->pluck('price')->sort();

        return view('car-list', compact('vehicles', 'brands', 'types', 'years', 'fuels', 'transmissions', 'prices'));
    }

    public function indexTransmission($transmission){
        $vehicles = Vehicle::where('transmission', $transmission)
            ->orderBy('price', 'asc') // Ordenar por precio de menor a mayor
            ->get();

        // Obtener valores únicos para los filtros
        $brands = Vehicle::select('brand')->distinct()->pluck('brand')->sort();
        $types = Vehicle::select('type')->distinct()->pluck('type')->sort();
        $years = Vehicle::select('year')->distinct()->pluck('year')->sortDesc(); // Ordenar años de mayor a menor
        $fuels = Vehicle::select('fuel')->distinct()->pluck('fuel')->sort();
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission')->sort();
        $prices = Vehicle::select('price')->distinct()->pluck('price')->sort();

        return view('car-list', compact('vehicles', 'brands', 'types', 'years', 'fuels', 'transmissions', 'prices'));
    }

    public function indexPrice($price){
        $vehicles = Vehicle::where('price', $price)
            ->orderBy('price', 'asc') // Ordenar por precio de menor a mayor
            ->get();

        // Obtener valores únicos para los filtros
        $brands = Vehicle::select('brand')->distinct()->pluck('brand')->sort();
        $types = Vehicle::select('type')->distinct()->pluck('type')->sort();
        $years = Vehicle::select('year')->distinct()->pluck('year')->sortDesc(); // Ordenar años de mayor a menor
        $fuels = Vehicle::select('fuel')->distinct()->pluck('fuel')->sort();
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission')->sort();
        $prices = Vehicle::select('price')->distinct()->pluck('price')->sort();

        return view('car-list', compact('vehicles', 'brands', 'types', 'years', 'fuels', 'transmissions', 'prices'));
    }
    

    // Método para mostrar un vehículo específico
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id); // Buscar un vehículo por ID
        $bookings = Booking::where('vehicle_id', $vehicle->id)
            ->where('start_date', '>=', date('Ymd'))
            ->get();

        // Convertir las fechas de las reservas en el formato necesario
        $bookedDates = $bookings->map(function($booking) {
            return [
                'from' => $booking->start_date,
                'to' => $booking->end_date,
            ];
        })->toArray();
    
        return view('car-detail', compact('vehicle', 'bookings','bookedDates'));
    }

    // Método para mostrar el formulario de creación de un nuevo vehículo
    public function create()
    {
        return view('admin-panel.cars.vehicle-create'); // La vista con el formulario de creación
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
            'transmission' => 'required|string',
            'price' => 'required|numeric',
            'type' => 'required|string|max:255',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif',
            'image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif',
            'description' => 'nullable|string',
            'fee' => 'required|numeric',
            'published' => 'nullable|boolean',
            'available' => 'nullable|boolean',
        ]);

            // Establecer 'false' por defecto si no se envía valor para published y available
            $validated['published'] = $validated['published'] ?? false;
            $validated['available'] = $validated['available'] ?? false;

        // Procesamiento de imágenes
        $imagePaths = [];
            foreach (['image_1', 'image_2', 'image_3', 'image_4', 'image_5'] as $imageField) {
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
            'transmission' => $validated['transmission'],
            'fuel' => $validated['fuel'],
            'color' => $validated['color'],
            'price' => $validated['price'],
            'image_1' => $imagePaths['image_1'],
            'image_2' => $imagePaths['image_2'],
            'image_3' => $imagePaths['image_3'],
            'image_4' => $imagePaths['image_4'],
            'image_5' => $imagePaths['image_5'],
            'description' => $validated['description'],
            'fee' => $validated['fee'],
            'published' => $validated['published'],
            'available' => $validated['available'],
        ]);


        // Redirige a la lista de vehículos con un mensaje de éxito
        return redirect()->route('manage-cars')->with('success', 'Vehículo creado correctamente.');
    }

        // Método para mostrar un vehículo específico
        public function edit($id)
        {
            $vehicle = Vehicle::findOrFail($id); // Buscar un vehículo por ID
            return view('admin-panel.cars.vehicle-edit', compact('vehicle')); // Pasa el vehículo a la vista

        }

        public function update(Request $request, $id)
        {
            // Validación de los datos del formulario
            $validated = $request->validate([
                'brand' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'year' => 'required|integer|min:1900|max:2099',
                'color' => 'required|string|max:255',
                'fuel' => 'required|string',
                'transmission' => 'required|string',
                'price' => 'required|numeric',
                'type' => 'required|string|max:255',
                'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'description' => 'nullable|string',
                'fee' => 'required|numeric',
                'published' => 'nullable|boolean',
                'available' => 'nullable|boolean',
            ]);
        
            // Buscar el vehículo en la base de datos
            $vehicle = Vehicle::findOrFail($id);
        
            // Procesamiento de imágenes
            foreach (['image_1', 'image_2', 'image_3', 'image_4', 'image_5'] as $imageField) {
                if ($request->hasFile($imageField)) {
                    // Almacena la imagen y guarda la nueva ruta
                    $vehicle->$imageField = $request->file($imageField)->store('vehicles-photos', 'public');
                }
            }
        
            // Actualizar el vehículo con los datos validados
            $vehicle->update([
                'brand' => $validated['brand'],
                'model' => $validated['model'],
                'type' => $validated['type'],
                'year' => $validated['year'],
                'transmission' => $validated['transmission'],
                'fuel' => $validated['fuel'],
                'color' => $validated['color'],
                'price' => $validated['price'],
                'description' => $validated['description'],
                'fee' => $validated['fee'],
                'published' => $validated['published'] ?? false,
                'available' => $validated['available'] ?? false,
            ]);
        
            // Redirige a la lista de vehículos con un mensaje de éxito
            return redirect()->route('manage-cars')->with('success', 'Vehículo editado correctamente.');
        }

        function destroy($id) {
             // Buscar el vehículo en la base de datos
            $vehicle = Vehicle::findOrFail($id);

            $bookings = Booking::where('vehicle_id', $id);

            $vehicle->delete();
            $bookings->delete();
            return redirect()->route('manage-cars');

        }
}
