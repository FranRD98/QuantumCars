<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\WarrantyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;

use App\Http\Middleware\CheckRole;

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// PÁGINA DE INICIO
Route::get('/', function () {
    return view('index');
})->name('index');

// VEHICULOS - Listado General
Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicle.index');

// Opciones de filtrado
Route::get('/vehicles/brand/{brand?}', [VehicleController::class, 'indexBrand'])->name('vehicles.brand');
Route::get('/vehicles/type/{type?}', [VehicleController::class, 'indexType'])->name('vehicles.type');
Route::get('/vehicles/year/{year?}', [VehicleController::class, 'indexYear'])->name('vehicles.year');
Route::get('/vehicles/fuel/{fuel?}', [VehicleController::class, 'indexFuel'])->name('vehicles.fuel');
Route::get('/vehicles/transmission/{transmission?}', [VehicleController::class, 'indexTransmission'])->name('vehicles.transmission');
Route::get('/vehicles/price/{price?}', [VehicleController::class, 'indexPrice'])->name('vehicles.price');

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


/* ACCIONES USUARIOS */
Route::middleware(CheckRole::class . ':cliente')->group(function () {
    Route::get('/verify-booking', [BookingController::class, 'verify'])->name('booking.verify'); // Cesta de la reserva
    Route::get('/confirmed-booking', function () { return view('successfullBooking'); })->name('booking.confirmed'); // Confirmación de reserva
    Route::get('/user/{id}/my-bookings', [BookingController::class, 'showUserBookings'])->name('user.bookings'); // Ver las reservas
});

Route::middleware(CheckRole::class . ':admin')->group(function () {
/* ADMINISTRADOR */
    // ACCESO ADMINISTRADOR - ADMIN ACCESS
    Route::get('/admin', function () { return view('admin-panel.admin-panel'); })->name('admin-panel');

    // GESTIONAR VEHÍCULOS - VEHICLES
    Route::get('/admin/manage-cars', [VehicleController::class, 'adminIndex'])->name('manage-cars');

    Route::get('/admin/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create'); //Crear garantía
    Route::post('/admin/vehicle/store', [VehicleController::class, 'store'])->name('vehicle.store'); // Almacenar vehículo
    Route::get('admin/vehicle/edit/{id}', [VehicleController::class, 'edit'])->name('vehicle.edit'); // Editar vehículo
    Route::put('admin/vehicle/edit/{id}', [VehicleController::class, 'update'])->name('vehicle.update'); // Actualizar vehículo
    Route::delete('admin/vehicle/delete/{id}', [VehicleController::class, 'destroy'])->name('vehicle.destroy'); // Eliminar vehículo

    // GARANTIAS - WARRANTIES
    Route::get('/admin/manage-warranties', [WarrantyController::class, 'index'])->name('manage-warranties');

    Route::get('/admin/warranty/create', [WarrantyController::class, 'create'])->name('warranty.create'); //Crear garantía
    Route::post('/admin/warranty/store', [WarrantyController::class, 'store'])->name('warranty.store'); // Almacenar garantía
    Route::get('admin/warranty/edit/{id}', [WarrantyController::class, 'edit'])->name('warranty.edit'); // Editar garantía
    Route::put('admin/warranty/edit/{id}', [WarrantyController::class, 'update'])->name('warranty.update'); // Actualizar garantía
    Route::delete('admin/warranty/delete/{id}', [WarrantyController::class, 'destroy'])->name('warranty.destroy'); // Eliminar garantía

    // RESERVAS - BOOKINGS
    Route::get('/admin/manage-bookings', [BookingController::class, 'index'])->name('manage-bookings');

    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store'); // Almacenar reserva
    Route::get('admin/booking/edit/{id}', [BookingController::class, 'edit'])->name('booking.edit'); // Editar reserva
    Route::put('admin/booking/edit/{id}', [BookingController::class, 'update'])->name('booking.update'); // Actualizar reserva
    Route::delete('admin/booking/delete/{id}', [BookingController::class, 'destroy'])->name('booking.destroy'); // Eliminar reserva

    // USUARIOS - USERS
    Route::get('/admin/manage-users', [UserController::class, 'index'])->name('manage-users'); 

    Route::get('/admin/user/create', [UserController::class, 'create'])->name('user.create'); //Crear usuario
    Route::post('/admin/user/store', [UserController::class, 'store'])->name('user.store'); // Almacenar usuario
    Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit'); // Editar usuario
    Route::put('admin/user/edit/{id}', [UserController::class, 'update'])->name('user.update'); // Actualizar usuario
    Route::delete('admin/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy'); // Eliminar usuario
});


