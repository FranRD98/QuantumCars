@include('admin-panel.header-admin', ['title' => 'Gestionar Coches | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section>

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-4xl">Gestionar Coches</h1>

            <!-- Botón de añadir nuevo vehículo -->
            <div class="flex justify-end">
                <a class="px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="{{ route('vehicle.create') }}">Crear Coche</a>
            </div>
        </div>

        <table class="min-w-full bg-white border-collapse table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-gray-600">Coche</th>
                <th class="px-6 py-3 text-left text-gray-600">Transmisión</th>
                <th class="px-6 py-3 text-left text-gray-600">Combustible</th>
                <th class="px-6 py-3 text-left text-gray-600">Fianza</th>
                <th class="px-6 py-3 text-left text-gray-600">Precio</th>
                <th class="px-6 py-3 text-left text-gray-600">Dispo.</th>
                <th class="px-6 py-3 text-left text-gray-600">Publi.</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $index => $vehicle)

                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} *:px-6 *:py-4 *:text-gray-800 *:hover:bg-[#8b82f6] *:hover:text-white *:transition *:cursor-pointer" onclick="window.location.href=`{{ route('vehicle.edit', ['id' => $vehicle->id]) }}`">
                
                    <td>{{ $vehicle->brand }} {{ $vehicle->model }} {{ $vehicle->color }} {{ $vehicle->year }}</td>
                    <td>{{ $vehicle->transmission }}</td>
                    <td>{{ $vehicle->fuel }}</td>
                    <td>{{ $vehicle->fee }} €</td>
                    <td>{{ number_format($vehicle->price, 0, ',', '.') }} €</td>
                    
                    @if($vehicle->available === 1)
                        <td class="px-6 py-4 text-gray-800">✅</td>
                    @else
                        <td class="px-6 py-4 text-gray-800">❌</td>
                    @endif

                    @if($vehicle->published === 1)
                        <td class="px-6 py-4 text-gray-800">✅</td>
                    @else
                        <td class="px-6 py-4 text-gray-800">❌</td>
                    @endif

                </tr>
            @endforeach
        </tbody>
    </table>

    </section>
</main>

</body>

</html>

