@include('layouts.header', ['title' => $vehicle->brand . ' ' . $vehicle->model . ' ' . $vehicle->year . ' ' . $vehicle->color . ' | QuantumCars Rent'])

<div class="flex flex-row justify-between px-24 py-6 gap-x-5">

    <div class="flex flex-col w-3/5 gap-y-6">
        <!-- Galería del vehículo -->
        <img src="{{ asset('storage/' . $vehicle->image) }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}" class="object-cover rounded-lg">
    
        <!-- Características del vehículo -->
        <div class="p-6 border rounded-xl">
            <h2 class="mb-4 text-2xl text-gray-800 font-base">Características:</h2>

            <div class="grid grid-cols-2 gap-x-6 gap-y-4">
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Marca:</p>
                    <p class="text-base text-[#050f23] font-base">{{ $vehicle->brand }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Modelo:</p>
                    <p class="text-base text-[#050f23] font-base">{{ $vehicle->model }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Año:</p>
                    <p class="text-base text-[#050f23] font-base">{{ $vehicle->year }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Kilometraje:</p>
                    <p class="text-base text-[#050f23] font-base">{{ number_format($vehicle->mileage, 0, ',', '.') }} km</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Combustible:</p>
                    <p class="text-base text-[#050f23] font-base">{{ $vehicle->fuel }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Transmisión:</p>
                    <p class="text-base text-[#050f23] font-base">{{ $vehicle->transmission }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Color:</p>
                    <p class="text-base text-[#050f23] font-base">{{ $vehicle->color }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-base text-[#696F7A] font-base">Tipo:</p>
                    <p class="text-base text-[#050f23] font-base">{{ $vehicle->type }}</p>
                </div>
            </div>
        </div>

        <!-- Descripción del vehículo -->
        <div class="p-6 border flexcol rounded-xl">
            <h2 class="mb-4 text-2xl text-gray-800 font-base">Descripción:</h2>
            <p class="text-justify">{{ $vehicle->description }}</p>
        </div>
    </div>

    <!-- Contenedor derecho sticky -->
    <div class="sticky flex flex-col w-2/5 h-full top-24 gap-y-6">
         
        <!-- Detalles del vehículo -->
        <div class="flex flex-col p-6 border rounded-xl gap-y-2">

            <!-- Estado -->
            @if($vehicle->available = 1)
                <div class="w-2/5 px-3 py-2 text-center text-green-500 bg-green-200 rounded-full">
                    <h2>Disponible</h2>
                </div>
             @else
             <div class="w-2/5 px-3 py-2 text-center text-red-500 bg-red-200 rounded-full">
                <h2>No disponible</h2>
             </div>
             @endif

            <h2 class="text-2xl text-gray-800 font-base">{{ $vehicle->year }} {{ $vehicle->brand }} {{ $vehicle->model }} </h2>
            <p class="text-3xl font-bold text-gray-900">{{ number_format($vehicle->price, 0, ',', '.') }} €</p>
            <hr>
        </div>

        <!-- Detalles fianza-->
        <div class="flex flex-col p-6 border rounded-xl gap-y-4">
            <div class="flex items-center justify-between">
                <h2 class="text-base text-[#696F7A] font-base">Precio</h2>
                <h2 class="text-base text-[#050f23] font-base">{{ number_format($vehicle->price, 0, ',', '.') }} €</h2>
            </div>

            <div class="flex items-center justify-between">
                <h2 class="text-base text-[#696F7A] font-base">Fianza</h2>
                <h2 class="text-base text-[#050f23] font-base">{{ number_format($vehicle->fee, 0, ',', '.') }} €</h2>
            </div>

            <div class="flex items-center justify-between">
                <h2 class="text-base text-[#696F7A] font-base">Impuestos</h2>
                <h2 class="text-base text-[#050f23] font-base">21%</h2>
            </div>

            <hr>

            <select id="car-warranty" class="w-full text-base text-[#8b82f6] ml-[-3px] bg-transparent">
            <option value="" disabled selected>Seleccionar garantía</option>
                <option value="noWarranty">Sin garantia</option>
                <option value="6months">1000€ - 6 meses - 10.000km</option>
                <option value="12months">1400€ - 12 meses - 20.000km</option>
                <option value="24months">2500€ - 24 meses - Sin límite de km</option>
            </select>
            <p class="text-sm text-[#696F7A] font-base">Cobertura para el conductor</p>

            <hr>

            <div class="flex items-center justify-between">
                <h2 class="text-base text-[#8b82f6] font-base">Total precio reserva:</h2>
                <h2 class="text-base text-[#8b82f6] font-base">Money</h2>
            </div>

            <a href="#" class="mt-6 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium inline-block">
                Reservar
            </a>
        </div>
    </div>

</div>

<section class="flex flex-col items-center px-8 py-16 bg-gray-100">
    <h2 class="mb-4 text-2xl text-gray-800 font-base">¿Necesitas más información?</h2>

    <a href="#" class="mt-6 px-8 py-3 text-white bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium inline-block">
                Obtener más información
    </a></section>


@include('layouts.footer')
