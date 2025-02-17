@include('admin-panel.header-admin', ['title' => 'Nuevo Vehículo | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section class="bg-gray-100">
    <h1 class="text-4xl text-center">Añadir vehículo</h1>
</section>

<section>

<div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-md">
    <h2 class="mb-6 text-2xl font-semibold text-gray-700">Agregar Vehículo</h2>

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

    <form action="{{ route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block mb-1 text-sm text-gray-600">Marca*</label>
                <input required type="text" name="brand" placeholder="Ejemplo: Toyota" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-600">Modelo*</label>
                <input required type="text" name="model" placeholder="Ejemplo: Corolla" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-600">Tipo*</label>
                <select required name="type" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
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
                <label class="block mb-1 text-sm text-gray-600">Año*</label>
                <input required type="number" name="year" min="1900" max="2099" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-600">Transmisión*</label>
                <select required name="transmission" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                    <option value="Manual">Manual</option>
                    <option value="Automático">Automático</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-600">Combustible*</label>
                <select required name="fuel" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                    <option value="Gasolina">Gasolina</option>
                    <option value="Diésel">Diésel</option>
                    <option value="Eléctrico">Eléctrico</option>
                    <option value="Híbrido">Híbrido</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-600">Color*</label>
                <input required type="text" name="color" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-600">Precio*</label>
                <input required type="number" step="0.01" name="price" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
            </div>

            <div>
                <label class="block mb-1 text-sm text-gray-600">Fianza*</label>
                <input required type="number" name="fee" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-sm text-gray-600">Descripción*</label>
                <textarea required name="description" class="w-full p-2 border rounded-lg" rows="6"></textarea>
            </div>


            <!-- Campos de imágenes adicionales -->
            <div class="col-span-2">
                <label class="block mb-1 text-sm text-gray-600">Imagen Principal*</label>
                <input required type="file" name="image_1" class="w-full p-2 border rounded-lg">
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-sm text-gray-600">Imagen 2</label>
                <input type="file" name="image_2" class="w-full p-2 border rounded-lg">
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-sm text-gray-600">Imagen 3</label>
                <input type="file" name="image_3" class="w-full p-2 border rounded-lg">
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-sm text-gray-600">Imagen 4</label>
                <input type="file" name="image_4" class="w-full p-2 border rounded-lg">
            </div>

            <div class="col-span-2">
                <label class="block mb-1 text-sm text-gray-600">Imagen 5</label>
                <input type="file" name="image_5" class="w-full p-2 border rounded-lg">
            </div>

            <!-- Propiedades booleanas -->
            <div class="flex gap-x-3">
                <!-- Campo oculto con valor 0 y el checkbox con valor 1 cuando está marcado -->
                <input type="hidden" name="published" value="0">
                <input type="checkbox" name="published" value="1" class="w-4 h-4 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                <label class="block mb-1 text-sm text-gray-600">¿Publicado?</label>
            </div>
        </div>

        <button type="submit" class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium">
            Guardar
        </button>
    </form>
</div>

</section>
</main>
</body>

</html>

