@include('layouts.header', ['title' => 'Tu reserva | QuantumCars Rent'])

<div class="flex flex-col justify-between px-8 py-6 md:flex-row md:px-24 gap-x-6">


    <!-- Sección izquierda: Detalles de la reserva -->
    <div class="flex flex-col w-full md:w-3/5 gap-y-6">
    
        <!-- Tarjeta del vehículo -->
        <div class="flex flex-col p-6 border rounded-xl gap-y-4">
            
            <div class="flex">
                <!-- Título -->
                <h2 class="text-2xl font-semibold text-gray-800">Tu Reserva</h2>
            </div>

            <div class="flex flex-row gap-x-6">
                <img src="{{ asset('storage/' . $vehicle->image_1) }}" alt="{{ $vehicle->brand }}" class="object-contain w-64 h-auto rounded-lg">
                
                <div class="flex flex-col gap-y-2">
                    <h3 class="text-xl font-medium text-gray-900">{{ $vehicle->brand }} {{ $vehicle->model }}</h3>
                    <p class="text-sm text-gray-500">Año: {{ $vehicle->year }} | Color: {{ $vehicle->color }}</p>
                    <p class="text-lg font-bold text-gray-900">{{ number_format($vehicle->price, 0, ',', '.') }} €/día</p>
                </div>
            </div>

            <!-- Fechas -->
            <div class="flex">
                <h2 class="text-2xl font-semibold text-gray-800">Tus fechas seleccionadas</h2>
            </div>

            <div class="flex flex-col gap-x-16 md:flex-row">
                <div class="flex flex-col">
                    <h2 class="text-sm text-gray-600">Fecha de inicio</h2>
                    <p class="text-lg font-semibold text-gray-900">{{ $start_date }}</p>

                </div>
                <div class="flex flex-col">
                <h2 class="text-sm text-gray-600">Fecha de devolución</h2>
                <p class="text-lg font-semibold text-gray-900">{{ $end_date }}</p>
                </div>
            </div>

        </div>

    </div>

    <!-- Sección derecha: Resumen y Confirmación -->
    <div class="sticky flex flex-col w-full h-full top-24 md:w-2/5 gap-y-6">

        <!-- Resumen de la compra -->
        <div class="flex flex-col p-6 border rounded-xl gap-y-4">
            <h3 class="text-xl font-medium text-gray-800">Resumen</h3>
            
            <div class="flex justify-between">
                <p class="text-gray-600">Días Totales</p>
                
                @if($days == 1)
                    <p id="total-days" class="font-medium text-gray-900">{{ $days }} día</p>
                @else
                    <p id="total-days" class="font-medium text-gray-900">{{ $days }} días</p>
                @endif
            
            </div>

            <div class="flex justify-between">
                <p class="text-gray-600">Fianza</p>
                <p class="font-medium text-gray-900">{{ number_format($vehicle->fee, 0, ',', '.') }} €</p>
            </div>

            <hr>

            <div class="flex justify-between text-xl font-bold">
                <p>Total a Pagar</p>
                <p id="total-price">{{ number_format($total_price, 0, ',', '.') }} €</p>
            </div>
        </div>

        <!-- Botón de Confirmar Reserva -->
        <div class="flex flex-col p-6 border rounded-xl gap-y-4">
            <div class="flex items-center gap-x-2">
                <input type="checkbox" id="terms" class="w-5 h-5">
                <label for="terms" class="text-sm text-gray-600">Acepto los <a href="{{ route('terms') }}" class="text-[#8b82f6] underline">términos y condiciones</a></label>
            </div>

            <form id="booking-form" action="{{ route('booking.store') }}" method="POST">
                @csrf
                <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                <input type="hidden" name="start_date" value="{{ $start_date }}">
                <input type="hidden" name="end_date" value="{{ $end_date }}">
                <input type="hidden" name="total_price" value="{{ $total_price }}">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <button type="submit" id="confirm-button" class="w-full px-8 py-3 text-lg font-medium text-white bg-gray-300 rounded-lg cursor-not-allowed" disabled>
                    Confirmar Reserva
                </button>
            </form>
        </div>

    </div>

</div>

<!-- Script para calcular precio total y habilitar botón -->
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Valida que el checkbox esté activado para poder habilitar el botón de reserva
        const confirmButton = document.getElementById('confirm-button');
        const termsCheckbox = document.getElementById('terms');

        termsCheckbox.addEventListener('change', function () {
            if (this.checked) {
                confirmButton.classList.remove('bg-gray-300', 'cursor-not-allowed');
                confirmButton.classList.add('bg-[#8b82f6]', 'hover:bg-[#6f63ff]');
                confirmButton.disabled = false;
            } else {
                confirmButton.classList.add('bg-gray-300', 'cursor-not-allowed');
                confirmButton.classList.remove('bg-[#8b82f6]', 'hover:bg-[#6f63ff]');
                confirmButton.disabled = true;
            }
        });

        // Formatea las fechas al formato adecuado para crear el registro en la base de datos 
        const bookingForm = document.getElementById('booking-form');

        bookingForm.addEventListener('submit', function(event) {
            // Selecciona los campos de fecha del formulario
            const startDateInput = document.querySelector('input[name="start_date"]');
            const endDateInput = document.querySelector('input[name="end_date"]');

            // Convierte las fechas al formato 'Y-m-d' (YYYY-MM-DD)
            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            startDateInput.value = startDate.toISOString().split('T')[0]; // 'YYYY-MM-DD'
            endDateInput.value = endDate.toISOString().split('T')[0];     // 'YYYY-MM-DD'
        });


    });
</script>

@include('layouts.footer')
