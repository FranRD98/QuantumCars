@include('admin-panel.header-admin', ['title' => 'Nueva Garantía | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section class="bg-gray-100">
    <h1 class="text-4xl text-center">Crear Garantía</h1>
</section>

<section>
    <div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-semibold text-gray-700">Agregar Garantía</h2>

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

        <form action="{{ route('warranty.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-sm text-gray-600">Tipo de Vehículo</label>
                    <select name="vehicle_type" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                        <option value="Compacto">Compacto</option>
                        <option value="SUV">SUV</option>
                        <option value="Sedán">Sedán</option>
                        <option value="Deportivo">Deportivo</option>
                        <option value="Furgoneta">Furgoneta</option>
                        <option value="Eléctrico">Eléctrico</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-600">Duración (en meses)</label>
                    <input type="number" name="duration_months" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-600">Límite de kilómetros anual (o "Sin límite")</label>
                    <input type="number" name="km_limit" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-600">Precio (€)</label>
                    <input type="number" step="0.01" name="price" placeholder="Ejemplo: 1000€" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                </div>

            </div>

            <button type="submit" class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium">
                Guardar Garantía
            </button>
        </form>
    </div>
</section>

</main>
</body>

</html>

