<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Mostrar todas las reservas
    public function index(){
        $bookings = Booking::all();

        $vehicles = Vehicle::whereIn('id', $bookings->pluck('vehicle_id'))->get();
        return view('admin-panel.bookings.manage-bookings', compact('bookings','vehicles'));
    }

    public function showUserBookings($userId) {
        
        $bookings = Booking::where('user_id', $userId)->get();
        $vehicles = Vehicle::whereIn('id', $bookings->pluck('vehicle_id'))->get();
        return view('user-panel.bookings.show-bookings', compact('bookings', 'vehicles'));
    }

    // Mostrar el formulario para crear una nueva reserva
    public function create()
    {
        return view('booking.create');
    }

    // Verificar la reserva antes de confirmarla
    public function verify(Request $request)
    {
        $vehicle = Vehicle::findOrFail($request->vehicle_id);
        $total_price = $request->total;
        $days = $request->days;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        return view('admin-panel.bookings.booking-verify', compact('vehicle', 'total_price', 'days', 'start_date', 'end_date'));
    }

// Guardar una nueva reserva en la base de datos

public function store(Request $request)
{
    
    // Continúa con la validación
    $validated = $request->validate([
        'user_id'     => 'required|exists:users,id',
        'vehicle_id'  => 'required|exists:vehicles,id',
        'start_date'  => 'required|date',
        'end_date'    => 'required|date',
        'total_price' => 'required|numeric|min:1',
    ]);

    // Agregar el estado manualmente antes de la creación
    $validated['status'] = 'pending';

    // Crear la reserva
    Booking::create($validated);

    return redirect()->route('booking.confirmed')->with('success', 'Reserva creada correctamente.');
}


    // Mostrar una reserva específica
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('booking.show', compact('booking'));
    }

    // Mostrar el formulario para editar una reserva
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('admin-panel.bookings.booking-edit', compact('booking'));
    }

    // Actualizar una reserva existente
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'status'  => 'required',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($validated);

        return redirect()->route('manage-bookings')->with('success', 'Reserva actualizada correctamente.');
    }

    // Eliminar una reserva
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('manage-bookings')->with('success', 'Reserva eliminada correctamente.');
    }
}
