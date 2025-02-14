<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WarrantyController;
use App\Http\Controllers\BookingController;

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

// TERMINOS Y CONDICIONES
Route::get('/terminos-y-condiciones', function () {
    return view('terms');
})->name('terms');


/* 
    OPCIONES ADMINISTRADOR 
*/
Route::get('/admin', function () {
    return view('admin-panel.admin-panel');
})->name('admin-panel');


// GESTIONAR VEHÍCULOS
Route::get('/admin/manage-cars', [VehicleController::class, 'adminIndex'])->name('manage-cars');

Route::get('/admin/cars/create', function () {
    return view('admin-panel.cars.vehicle-create');
})->name('vehicle.create');

// Crear vehículo en la BBDD
Route::post('/admin/vehicles/store', [VehicleController::class, 'store'])->name('vehicle.store');

// Editar vehículo
Route::get('admin/vehicle/edit/{id}', [VehicleController::class, 'edit'])->name('vehicle.edit');
Route::put('admin/vehicle/edit/{id}', [VehicleController::class, 'update'])->name('vehicle.update');
Route::delete('admin/vehicle/delete/{id}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');

/* ---------- */

// GESTIONAR GARANTÍAS
Route::get('/admin/manage-warranties', [WarrantyController::class, 'index'])->name('warranty.index');

Route::get('/admin/create-warranty', function () {
    return view('admin-panel.warranties.warranty-create');
})->name('warranty.create');

// Crear garantía en la BBDD
Route::post('/admin/warranty/store', [WarrantyController::class, 'store'])->name('warranty.store');

// Editar Garantía
Route::get('admin/warranty/edit/{id}', [WarrantyController::class, 'edit'])->name('warranty.edit');
Route::put('admin/warranty/edit/{id}', [WarrantyController::class, 'update'])->name('warranty.update');
Route::delete('admin/warranty/delete/{id}', [WarrantyController::class, 'destroy'])->name('warranty.destroy');

// GESTIONAR RESERVAS
Route::get('/admin/manage-bookings', function () {
    return view('admin-panel.manage-bookings');
})->name('manage-bookings');

Route::get('/verify-booking', [BookingController::class, 'verify'])->name('booking.verify');

// Crear reserva en la BBDD
Route::post('/admin/booking/store', [BookingController::class, 'store'])->name('booking.store');

// GESTIONAR USUARIOS
Route::get('/admin/manage-users', function () {
    return view('admin-panel.manage-users');
})->name('manage-users');

