@include('admin-panel.header-admin', ['title' => 'Gestionar Usuarios | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section>

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-4xl">Gestionar Usuarios</h1>

            <!-- Botón de añadir nuevo vehículo -->
            <div class="flex justify-end">
                <a class="px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="{{ route('vehicle.create') }}">Crear Usuario</a>
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
                <th class="px-6 py-3 text-left text-gray-600">¿Disponible?</th>
                <th class="px-6 py-3 text-left text-gray-600">¿Publicado?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicles as $index => $vehicle)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="px-6 py-4 text-gray-800">{{ $vehicle->brand }} {{ $vehicle->model }} {{ $vehicle->color }} {{ $vehicle->year }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ $vehicle->transmission }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ $vehicle->fuel }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ $vehicle->fee }} €</td>
                    <td class="px-6 py-4 text-gray-800">{{ number_format($vehicle->price, 0, ',', '.') }} €</td>
                    <td class="px-6 py-4 text-gray-800">{{ $vehicle->available }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ $vehicle->published }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>



    </section>
</main>

</body>

</html>

