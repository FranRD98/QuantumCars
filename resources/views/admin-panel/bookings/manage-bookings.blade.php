@include('admin-panel.header-admin', ['title' => 'Gestionar Reservas | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section>

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-4xl">Gestionar Reservas</h1>
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

                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} *:px-6 *:py-4 *:text-gray-800 *:hover:bg-[#8b82f6] *:hover:text-white *:transition *:cursor-pointer" onclick="window.location.href=`{{ route('booking.edit', ['id' => $booking->id]) }}`">
                    
                    <td>#{{ $booking->id }}</td>
                    <td>{{ date('d/m/Y h:m', strtotime($booking->created_at)) }}</td>
                    <td>{{ $booking->vehicle->brand}} {{ $booking->vehicle->model }}</td>
                    <td>{{ date('d/m/Y', strtotime($booking->start_date)) }}</td>
                    <td>{{ date('d/m/Y', strtotime($booking->end_date)) }}</td>
                    <td>{{ number_format($booking->total_price, 0, ',', '.') }}€</td>
                    
                    
                    <td>
                        @if($booking->status === 'confirmed')
                            <a class="px-3 py-2 text-green-500 bg-green-200 rounded-full">Confirmada</a>
                        @elseif($booking->status === 'pending')
                            <a class="px-3 py-2 text-yellow-500 bg-yellow-200 rounded-full">Pendiente</a>
                        @else
                            <a class="px-3 py-2 text-red-500 bg-red-200 rounded-full">Cancelada</a>
                        @endif
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


    </section>
</main>

</body>

</html>

