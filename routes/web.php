<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WarrantyController;

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

// VEHICULOS - Listado
Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicle.index');

Route::get('/vehicles/brand/{brand?}', function ($brand = null) {
    if ($brand) {
        // Si hay una marca, se filtra por esa marca
        return view('car-list', ['brand' => $brand]);
    } else {
        // Si no hay marca, se muestran todos los vehículos
        return view('car-list');
    }
})->name('vehicles-brand');

// VEHICULOS - Ruta dinámica para cada tipo de coche
Route::get('/vehicles/type/{type?}', function ($type = null) {
    if ($type) {
        // Si hay una marca, se filtra por esa marca
        return view('car-list', ['type' => $type]);
    } else {
        // Si no hay marca, se muestran todos los vehículos
        return view('car-list');
    }
})->name('vehicles-type');

// Vehiculo detalle
Route::get('/vehicle/{id}', [VehicleController::class, 'show'])->name('vehicle.show');

// PREGUNTAS FRECUENTES
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// CONTACTO
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/* 
    OPCIONES ADMINISTRADOR 
*/
Route::get('/admin', function () {
    return view('admin-panel.admin-panel');
})->name('admin-panel');


// GESTIONAR VEHÍCULOS
Route::get('/admin/manage-cars', [VehicleController::class, 'adminIndex'])->name('manage-cars');

Route::get('/admin/create-car', function () {
    return view('admin-panel.vehicle-create');
})->name('vehicle.create');

// Crear vehículo en la BBDD
Route::post('/admin/vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store');

/* ---------- */

// GESTIONAR GARANTÍAS
Route::get('/admin/manage-warranties', [WarrantyController::class, 'index'])->name('warranty.index');


Route::get('/admin/create-warranty', function () {
    return view('admin-panel.warranty-create');
})->name('warranty.create');

// Crear garantía en la BBDD
Route::post('/admin/warranty/store', [WarrantyController::class, 'store'])->name('warranty.store');

Route::get('/admin/manage-bookings', function () {
    return view('admin-panel.manage-bookings');
})->name('manage-bookings');

Route::get('/admin/manage-users', function () {
    return view('admin-panel.manage-users');
})->name('manage-users');