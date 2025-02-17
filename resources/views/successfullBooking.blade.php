@include('layouts.header', ['title' => 'Reserva realizada correctamente | QuantumCars Rent'])

<section class="max-w-4xl py-16 mx-auto">
    <h2 class="mb-4 text-3xl font-bold text-center">¡Hola {{ auth()->user()->user() }}!</h2>

    <h2 class="mb-8 text-2xl text-center font-base">Tú reserva se ha realizado correctamente!</h2>
    
    <p class="text-lg text-center text-gray-600">
        Nuestro equipo de QuantumCars Rent, esta revisando tu solicitud, recibirás mas información una vez se haya aceptado. Gracias por elegir QuantumCars.
    </p>

    

    <a href="{{ route('user.bookings', ['id' => auth()->id()]) }}" class="mt-6 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium w-full text-center block">
        Ver reserva
    </a>

</section>

@include('layouts.footer')
