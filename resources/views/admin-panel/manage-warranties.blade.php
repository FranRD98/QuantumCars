@include('admin-panel.header-admin', ['title' => 'Gestionar Garantías | QuantumCars Rent'])

<section class="bg-gray-100">
    <h1 class="text-4xl text-center">Gestionar Garantías</h1>
</section>

<section>
    <!-- Botón de añadir nueva garantía -->
    <div class="flex justify-end">
        <a class="px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="{{ route('warranty.create') }}">Nueva Garantía</a>
    </div>


    <table class="min-w-full bg-white border-collapse table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-gray-600">Tipo de Vehículo</th>
                <th class="px-6 py-3 text-left text-gray-600">Precio</th>
                <th class="px-6 py-3 text-left text-gray-600">Límite Anual</th>
                <th class="px-6 py-3 text-left text-gray-600">Duración</th>
                <th class="px-6 py-3 text-left text-gray-600">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($warranties as $index => $warranty)
                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }}">
                    <td class="px-6 py-4 text-gray-800">{{ $warranty->vehicle_type }}</td>
                    <td class="px-6 py-4 text-gray-800">{{ number_format($warranty->price, 0, ',', '.') }} €</td>
                    <td class="px-6 py-4 text-gray-800">{{ $warranty->km_limit }} km</td>
                    <td class="px-6 py-4 text-gray-800">{{ $warranty->duration_months }} meses</td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-[#8b82f6] hover:text-[#8b82f6] hover:underline">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>

@include('layouts.footer')

