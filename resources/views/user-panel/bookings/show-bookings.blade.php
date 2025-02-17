@include('layouts.header', ['title' => 'Tus Reservas | QuantumCars Rent'])

<!-- Contenido principal -->
<section>

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-4xl">Tus Reservas</h1>
        </div>

        <table class="min-w-full bg-white border-collapse table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-gray-600">Nº</th>
                <th class="px-6 py-3 text-left text-gray-600">Fecha Reserva</th>
                <th class="px-6 py-3 text-left text-gray-600">Vehículo</th>
                <th class="px-6 py-3 text-left text-gray-600">Fecha Inicio</th>
                <th class="px-6 py-3 text-left text-gray-600">Fecha Final</th>
                <th class="px-6 py-3 text-left text-gray-600">Precio</th>
                <th class="px-6 py-3 text-left text-gray-600">Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $index => $booking)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="px-6 py-4 text-gray-800">#{{ $booking->id }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ date('d/m/Y h:m', strtotime($booking->created_at)) }}</td>
                    
                    <td class="px-6 py-4 text-gray-800">{{ $booking->vehicle->brand}} {{ $booking->vehicle->model }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ date('d/m/Y', strtotime($booking->start_date)) }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ date('d/m/Y', strtotime($booking->end_date)) }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ number_format($booking->total_price, 0, ',', '.') }}€</td>
                    <td>
                        @if($booking->status === 'confirmed')
                            <a class="px-3 py-2 text-green-500 bg-green-200 rounded-full">Confirmada</a>
                        @elseif($booking->status === 'pending')
                            <a class="px-3 py-2 text-yellow-500 bg-yellow-200 rounded-full">Pendiente</a>
                        @else
                            <a class="px-3 py-2 text-red-500 bg-red-200 rounded-full">Cancelada</a>
                        @endif
                    </td>                </tr>
            @endforeach
        </tbody>
    </table>

    </section>

@include('layouts.footer')


