<?php

namespace App\Http\Controllers;

use App\Models\Warranty;
use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    // Mostrar todas las garantías
    public function index()
    {
        $warranties = Warranty::all();
        return view('admin-panel.manage-warranties', compact('warranties'));

    }

    // Mostrar el formulario para crear una nueva garantía
    public function create()
    {
        return view('warranties.create');
    }

    // Guardar una nueva garantía en la base de datos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'vehicle_type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_months' => 'required|integer',
            'km_limit' => 'nullable|integer',
        ]);

        Warranty::create($validated);

        return redirect()->route('warranty.index')->with('success', 'Garantía creada correctamente.');
    }

    // Mostrar una garantía específica
    public function show($id)
    {
        $warranty = Warranty::findOrFail($id);
        return view('warranties.show', compact('warranty'));
    }

    // Mostrar el formulario para editar una garantía
    public function edit($id)
    {
        $warranty = Warranty::findOrFail($id);
        return view('warranties.edit', compact('warranty'));
    }

    // Actualizar una garantía existente
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'vehicle_type' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration_months' => 'required|integer',
            'km_limit' => 'nullable|integer',
        ]);

        $warranty = Warranty::findOrFail($id);
        $warranty->update($validated);

        return redirect()->route('warranties.index')->with('success', 'Garantía actualizada correctamente.');
    }

    // Eliminar una garantía
    public function destroy($id)
    {
        $warranty = Warranty::findOrFail($id);
        $warranty->delete();

        return redirect()->route('warranties.index')->with('success', 'Garantía eliminada correctamente.');
    }
}

