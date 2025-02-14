@include('admin-panel.header-admin', ['title' => 'Editar Garantía | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section class="bg-gray-100">
    <h1 class="text-4xl text-center">Editar Garantía</h1>
</section>

<section>

<div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-md">
    <h2 class="mb-6 text-2xl font-semibold text-gray-700">Editar Garantía</h2>

    <!-- Mensajes de error de validación -->
    @if ($errors->any())
        <div class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('warranty.update', ['id' => $warranty->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-sm text-gray-600">Tipo de Vehículo</label>
                    <select name="vehicle_type" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                        <option value="Compacto" {{ $warranty->vehicle_type == 'Compacto' ? 'selected' : '' }}>Compacto</option>
                        <option value="SUV" {{ $warranty->vehicle_type == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="Sedán" {{ $warranty->vehicle_type == 'Sedán' ? 'selected' : '' }}>Sedán</option>
                        <option value="Deportivo" {{ $warranty->vehicle_type == 'Deportivo' ? 'selected' : '' }}>Deportivo</option>
                        <option value="Furgoneta" {{ $warranty->vehicle_type == 'Furgoneta' ? 'selected' : '' }}>Furgoneta</option>
                        <option value="Eléctrico" {{ $warranty->vehicle_type == 'Eléctrico' ? 'selected' : '' }}>Eléctrico</option>
                        <option value="Otro" {{ $warranty->vehicle_type == 'Otro' ? 'selected' : '' }}>Otro</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-600">Duración (en meses)</label>
                    <input type="number" name="duration_months" value="{{ $warranty->duration_months }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-600">Límite de kilómetros anual (o "Sin límite")</label>
                    <input type="number" name="km_limit" value="{{ number_format($warranty->km_limit, 0, ',', '.') }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-600">Precio (€)</label>
                    <input type="number" step="0.01" name="price" value="{{ number_format($warranty->price, 0, ',', '.') }}" placeholder="Ejemplo: 1000€" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                </div>

            </div>

            <div class="flex justify-between">
                <!-- Botón editar -->
                <button type="submit" class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium">
                    Editar Garantía
                </button>
                </form>
                <!-- Botón de eliminar garantía -->
                <form action="{{ route('warranty.destroy', ['id' => $warranty->id]) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="px-8 py-3 mt-8 text-lg font-medium text-white transition duration-500 bg-red-600 rounded-lg hover:bg-red-700">
                        Eliminar Garantía
                    </button>
                </form>
            </div>

</div>

</section>
</main>

</body>
</html>
