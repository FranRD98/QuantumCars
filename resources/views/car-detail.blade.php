@include('layouts.header', ['title' => $vehicle->brand . ' ' . $vehicle->model . ' ' . $vehicle->year . ' ' . $vehicle->color . ' | QuantumCars Rent'])

<div class="flex flex-row justify-between px-24 py-6 gap-x-5">
    <div class="flex flex-col w-3/5 gap-y-6">
        <!-- Galería del vehículo -->
        @for ($i = 1; $i <= 5; $i++)
            @if (!empty($vehicle->{'image_' . $i}))
                <img src="{{ asset('storage/' . $vehicle->{'image_' . $i}) }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}" class="object-cover rounded-lg">
            @endif
        @endfor

        <!-- Características del vehículo -->
        <div class="p-6 border rounded-xl">
            <h2 class="mb-4 text-2xl text-gray-800 font-base">Características:</h2>
            <div class="grid grid-cols-2 gap-x-6 gap-y-4">
                @foreach (['Marca' => 'brand', 'Modelo' => 'model', 'Año' => 'year', 'Kilometraje' => 'mileage', 'Combustible' => 'fuel', 'Transmisión' => 'transmission', 'Color' => 'color', 'Tipo' => 'type'] as $label => $field)
                    <div class="flex justify-between">
                        <p class="text-base text-[#696F7A] font-base">{{ $label }}:</p>
                        <p class="text-base text-[#050f23] font-base">
                            {{ $field === 'mileage' ? number_format($vehicle->$field, 0, ',', '.') . ' km' : $vehicle->$field }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Descripción del vehículo -->
        <div class="p-6 border flexcol rounded-xl">
            <h2 class="mb-4 text-2xl text-gray-800 font-base">Descripción:</h2>
            <p class="text-justify">{{ $vehicle->description }}</p>
        </div>
    </div>

    <!-- Contenedor derecho -->
    <div class="sticky flex flex-col w-2/5 h-full top-24 gap-y-6">
        <!-- Estado del vehículo -->
        <div class="flex flex-col p-6 border rounded-xl gap-y-2">
            <div class="w-2/5 px-3 py-2 text-center rounded-full {{ $vehicle->available ? 'text-green-500 bg-green-200' : 'text-red-500 bg-red-200' }}">
                <h2>{{ $vehicle->available ? 'Disponible' : 'No disponible' }}</h2>
            </div>
            <h2 class="text-2xl text-gray-800 font-base">{{ $vehicle->year }} {{ $vehicle->brand }} {{ $vehicle->model }}</h2>
            <p class="text-3xl text-gray-900"><strong>{{ number_format($vehicle->price, 0, ',', '.') }} €</strong>/día</p>
        </div>

        <!-- Selector de fechas y detalles-->
        <div class="flex flex-col p-6 border rounded-xl gap-y-4">
            <h2 class="text-base text-[#8b82f6] font-base">Selecciona tus fechas</h2>
            <input type="text" id="date-range" class="w-full p-2 border rounded-lg" placeholder="Selecciona las fechas">
            <hr>

            <div class="flex justify-between">
                <h2 class="text-base text-[#696F7A] font-base">Precio por día</h2>
                <h2 class="text-base text-[#050f23] font-base">{{ number_format($vehicle->price, 0, ',', '.') }} €</h2>
            </div>

            <div class="flex justify-between">
                <h2 class="text-base text-[#696F7A] font-base">Fianza</h2>
                <h2 class="text-base text-[#050f23] font-base">{{ number_format($vehicle->fee, 0, ',', '.') }} €</h2>
            </div>

            <div class="flex justify-between">
                <h2 class="text-base text-[#696F7A] font-base">Impuestos</h2>
                <h2 class="text-base text-[#050f23] font-base">21%</h2>
            </div>

            <hr>

            <div class="flex justify-between">
                <h2 class="text-base text-[#8b82f6] font-base">Total precio reserva:</h2>
                <h2 id="total-price" class="text-base text-[#8b82f6] font-base">0 €</h2>
            </div>

            <form id="reservation-form" action="{{ route('booking.verify', ['id' => $vehicle->id]) }}" method="GET">
                @csrf
                <input type="hidden" id="total-hidden" name="total">
                <input type="hidden" id="days-hidden" name="days">
                <input type="hidden" id="start_date-hidden" name="start_date">
                <input type="hidden" id="end_date-hidden" name="end_date">
                <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                <button type="submit" class="mt-6 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium w-full">
                    Reservar
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script> <!-- Traducción a español -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let pricePerDay = {{ $vehicle->price }};
        let fee = {{ $vehicle->fee }};
        let tax = 1.21;

        let dateRangePicker = flatpickr("#date-range", {
            mode: "range",
            minDate: "today",
            dateFormat: "d-m-Y",  // El formato es d-m-Y
            locale: "es", // Traducido a español
            onClose: function(selectedDates) {
                if (selectedDates.length === 2) {
                    let diffDays = Math.ceil((selectedDates[1] - selectedDates[0]) / (1000 * 60 * 60 * 24));
                    let total = ((pricePerDay * diffDays) + fee ) * tax;
                    
                    // Usamos el formato adecuado para las fechas seleccionadas (en formato d-m-Y)
                    let start_date = flatpickr.formatDate(selectedDates[0], "d/m/Y - H:i");
                    let end_date = flatpickr.formatDate(selectedDates[1], "d/m/Y - H:i");

                    document.getElementById('total-price').textContent = total.toFixed(0) + ' €';
                    document.getElementById('total-hidden').value = total;
                    document.getElementById('days-hidden').value = diffDays; // Aquí estamos pasando los días
                    document.getElementById('start_date-hidden').value = start_date; // Pasamos la fecha inicial
                    document.getElementById('end_date-hidden').value = end_date; // Pasamos la fecha final
                }
            }
        });
    });
</script>


<section class="flex flex-col items-center px-8 py-16 bg-gray-100">
    <h2 class="mb-4 text-2xl text-gray-800 font-base">¿Necesitas más información?</h2>
    <a href="{{ route('contact') }}" class="mt-6 px-8 py-3 text-white bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium inline-block">
        Obtener más información
    </a>
</section>

<!-- Estilos personalizados -->
<style>
    /* Estilos del selector de fechas */
    .flatpickr-calendar {
        background: #ffffff;
        border: 1px solid #8b82f6;
        border-radius: 10px;
    }

    /* Encabezado del calendario */
    .flatpickr-month {
        background: #8b82f6;
        color: white;
        border-radius: 10px 10px 0 0;
    }

    /* Días seleccionados */
    .flatpickr-day.selected,
    .flatpickr-day.startRange,
    .flatpickr-day.endRange {
        background: #8b82f6 !important;
        color: white !important;
        border-radius: 5px;
    }

    /* Días al pasar el cursor */
    .flatpickr-day:hover {
        background: #b3acf7;
        color: white;
    }

    /* Día actual */
    .flatpickr-day.today {
        border: 1px solid #8b82f6;
        color: #8b82f6;
    }
</style>

@include('layouts.footer')
