@include('admin-panel.header-admin', ['title' => 'Gestionar Garantías | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section>

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-4xl">Gestionar Garantías</h1>

            <!-- Botón de añadir nuevo vehículo -->
            <div class="flex justify-end">
                <a class="px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="{{ route('warranty.create') }}">Crear Garantía</a>
            </div>
        </div>

        <table class="min-w-full bg-white border-collapse table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-gray-600">Nº</th>
                <th class="px-6 py-3 text-left text-gray-600">Tipo de Vehículo</th>
                <th class="px-6 py-3 text-left text-gray-600">Precio</th>
                <th class="px-6 py-3 text-left text-gray-600">Límite Anual</th>
                <th class="px-6 py-3 text-left text-gray-600">Duración</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warranties as $index => $warranty)
            <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} *:px-6 *:py-4 *:text-gray-800 *:hover:bg-[#8b82f6] *:hover:text-white *:transition *:cursor-pointer" onclick="window.location.href=`{{ route('warranty.edit', ['id' => $warranty->id]) }}`">
                    <td class="px-6 py-4 text-gray-800">{{ $index + 1}}</td>  
                    <td class="px-6 py-4 text-gray-800">{{ $warranty->vehicle_type }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ number_format($warranty->price, 0, ',', '.') }} €</td>
                    <td class="px-6 py-4 text-gray-800">{{ number_format($warranty->km_limit, 0, ',', '.') }} km</td>
                    <td class="px-6 py-4 text-gray-800">{{ $warranty->duration_months }} meses</td>
                </tr>
            @endforeach
        </tbody>
    </table>



    </section>
</main>

</body>

</html>

