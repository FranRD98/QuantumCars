@include('admin-panel.header-admin', ['title' => 'Editar Vehículo | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section class="bg-gray-100">
    <h1 class="text-4xl text-center">Editar vehículo</h1>
</section>

<section>

<div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-md">
    <h2 class="mb-6 text-2xl font-semibold text-gray-700">Editar Vehículo</h2>

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

    <form action="{{ route('vehicle.update', ['id' => $vehicle->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <!-- Columna 1 -->
        <div>
            <label class="block mb-1 text-sm text-gray-600">Marca*</label>
            <input required type="text" name="brand" placeholder="Ejemplo: Toyota" value="{{ $vehicle->brand }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Modelo*</label>
            <input required type="text" name="model" placeholder="Ejemplo: Corolla" value="{{ $vehicle->model }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Tipo*</label>
            <select required name="type" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                <option value="Compacto" {{ $vehicle->type == 'Compacto' ? 'selected' : '' }}>Compacto</option>
                <option value="SUV" {{ $vehicle->type == 'SUV' ? 'selected' : '' }}>SUV</option>
                <option value="Sedán" {{ $vehicle->type == 'Sedán' ? 'selected' : '' }}>Sedán</option>
                <option value="Deportivo" {{ $vehicle->type == 'Deportivo' ? 'selected' : '' }}>Deportivo</option>
                <option value="Furgoneta" {{ $vehicle->type == 'Furgoneta' ? 'selected' : '' }}>Furgoneta</option>
                <option value="Eléctrico" {{ $vehicle->type == 'Eléctrico' ? 'selected' : '' }}>Eléctrico</option>
                <option value="Otro" {{ $vehicle->type == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Año*</label>
            <input required type="number" name="year" min="1900" max="2099" value="{{ $vehicle->year }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Transmisión*</label>
            <select required name="transmission" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                <option value="Manual" {{ $vehicle->transmission == 'Manual' ? 'selected' : '' }}>Manual</option>
                <option value="Automático" {{ $vehicle->transmission == 'Automático' ? 'selected' : '' }}>Automático</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Combustible*</label>
            <select required name="fuel" value="{{ $vehicle->fuel }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                <option value="Gasolina" {{ $vehicle->fuel == 'Gasolina' ? 'selected' : '' }}>Gasolina</option>
                <option value="Diésel" {{ $vehicle->fuel == 'Diésel' ? 'selected' : '' }}>Diésel</option>
                <option value="Eléctrico" {{ $vehicle->fuel == 'Eléctrico' ? 'selected' : '' }}>Eléctrico</option>
                <option value="Híbrido" {{ $vehicle->fuel == 'Híbrido' ? 'selected' : '' }}>Híbrido</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Color*</label>
            <input required type="text" name="color" value="{{ $vehicle->color }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Precio*</label>
            <input required type="number" step="0.01" name="price" value="{{ $vehicle->price }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Fianza*</label>
            <input required type="number" name="fee" value="{{ $vehicle->fee }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div class="col-span-2">
            <label required class="block mb-1 text-sm text-gray-600">Descripción*</label>
            <textarea name="description" class="w-full p-2 border rounded-lg" rows="6">{{ $vehicle->description }}</textarea>
        </div>

        <!-- Campos de imágenes adicionales -->
<div class="col-span-2">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        @for ($i = 1; $i <= 5; $i++)
            <div class="flex flex-col">
                <label class="mb-2 text-sm text-gray-600">Imagen {{ $i }}*</label>
                <div class="flex flex-col p-4 border-2 border-dashed border-[#8b82f6] bg-[#e0e4f1] rounded-lg">
                    <div class="flex flex-col w-full mb-4">
                        <!-- Input de archivo oculto -->
                        <input type="file" name="image_{{ $i }}" class="hidden p-2 rounded-lg" id="image_{{ $i }}">
                        
                        <!-- Etiqueta que es visible y se usa para seleccionar el archivo -->
                        <label for="image_{{ $i }}" class="flex justify-center items-center cursor-pointer w-full p-4 border-2 border-dashed border-[#8b82f6] rounded-lg text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white transition-all">
                            <span class="text-sm">Haz clic para seleccionar</span>
                        </label>
                    </div>

                    <div class="flex justify-center w-full">
                        <!-- Mostrar imagen si existe -->
                        @if($vehicle->{'image_' . $i})
                            <img src="{{ asset('storage/' . $vehicle->{'image_' . $i}) }}" alt="Imagen {{ $i }}" class="object-cover w-full rounded-lg h-72">
                        @else
                            <p class="text-sm text-gray-500">No se ha seleccionado imagen</p>
                        @endif
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>

        <!-- Propiedades booleanas -->
        <div class="flex col-span-2 gap-x-3">
            <input type="hidden" name="published" value="0">
            <input type="checkbox" name="published" value="1" class="w-4 h-4 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" {{ $vehicle->published === 1 ? 'checked' : '' }}>
            <label class="block mb-1 text-sm text-gray-600">¿Publicado?</label>
        </div>


    </div>
    <div class="flex justify-between">
            <!-- Botón editar -->
            <button type="submit" class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium">
                Editar Vehículo
            </button>
            </form>
            <!-- Botón de eliminar vehículo -->
            <form action="{{ route('vehicle.destroy', ['id' => $vehicle->id]) }}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit" class="px-8 py-3 mt-8 text-lg font-medium text-white transition duration-500 bg-red-600 rounded-lg hover:bg-red-700">
                    Eliminar vehículo
                </button>
            </form>
        </div>
</div>

</section>
</main>

</body>
</html>
