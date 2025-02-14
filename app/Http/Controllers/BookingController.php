<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Mostrar todas las reservas
    public function index()
    {
        $bookings = Booking::all();
        return view('admin-panel.bookings.manage-bookings', compact('bookings'));
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
        $validated = $request->validate([
            'vehicle_id'  => 'required|exists:vehicles,id',
            'start_date'  => 'required|date|after_or_equal:today',
            'end_date'    => 'required|date|after:start_date',
            'total_price' => 'required|numeric|min:1',
        ]);

        Booking::create($validated);

        return redirect()->route('booking.index')->with('success', 'Reserva creada correctamente.');
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
            'start_date'  => 'required|date|after_or_equal:today',
            'end_date'    => 'required|date|after:start_date',
            'total_price' => 'required|numeric|min:1',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($validated);

        return redirect()->route('booking.index')->with('success', 'Reserva actualizada correctamente.');
    }

    // Eliminar una reserva
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'Reserva eliminada correctamente.');
    }
}
