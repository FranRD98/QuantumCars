<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

// PÁGINA DE INICIO
Route::get('/', function () {
    return view('index');
})->name('index');

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// VEHICULOS - Ruta dinámica para cada marca de coche
Route::get('/vehicles/{brand?}', function ($brand = null) {
    if ($brand) {
        // Si hay una marca, se filtra por esa marca
        return view('car-list', ['brand' => $brand]);
    } else {
        // Si no hay marca, se muestran todos los vehículos
        return view('car-list');
    }
})->name('vehicles');

// Vehiculo detalle
Route::get('/vehicle/{id}', [VehicleController::class, 'show'])->name('vehicle.show');


// PREGUNTAS FRECUENTES
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// CONTACTO
Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

