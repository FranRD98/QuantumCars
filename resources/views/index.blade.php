@include('layouts.header', ['title' => 'QuantumCars Rent'])


    <!-- Sección Hero -->
    <section>
        <div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold">Nuevo coche en un par de clicks</h2>
            <p class="mt-4 text-base sm:text-lg text-gray-500">Elige entre cientos de modelos y reserva al instante.</p>
            <img class="scale-x-[-1] overflow-hidden block w-auto max-w-full max-h-56 sm:max-h-72 mx-auto mt-6 lg:max-w-none lg:max-h-96 lg:mx-0 lg:ml-auto lg:-mr-16 lg:mt-0" src="{{ asset('storage/landing/heroSection.png') }}">
        </div>
    </section>

    <!-- Sección de Búsqueda de Vehículos -->
    <section class="bg-gray-100">
        <h1 class="my-8 text-2xl sm:text-3xl font-bold text-center">Encuentra el coche ideal</h1>

        <div class="flex flex-wrap justify-center sm:justify-around gap-6 sm:gap-8 max-w-6xl mx-auto">
            <!-- CARD Compactos -->
            <a href="{{ route('vehicles.type', ['type' => 'Compacto']) }}" class="bg-[#8b82f6] text-white rounded-xl py-6 sm:py-8 pl-6 sm:pl-8 w-full sm:w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-44 sm:h-48 group">
                <div class="w-2/3">
                    <h2 class="text-xl sm:text-2xl font-medium">Compactos</h2>
                    <h3 class="text-sm sm:text-base">{{ $typeCounts['Compacto'] ?? 0 }} {{ ($typeCounts['Compacto'] ?? 0) == 1 ? 'coche disponible' : 'coches disponibles' }}</h3>
                    <p class="block mt-6 sm:mt-8 text-lg sm:text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="relative w-full h-full overflow-hidden">
                    <img
                        src="{{ asset('storage/landing/Compactos.svg') }}"
                        class="absolute right-[-40%] h-full object-contain transition-all duration-500 ease-in-out group-hover:right-[-20%]"
                        alt="Compactos">
                    </div>
            </a>

            <!-- CARD SUV's -->
            <a href="{{ route('vehicles.type', ['type' => 'SUV']) }}" class="bg-[#8b82f6] text-white rounded-xl py-6 sm:py-8 pl-6 sm:pl-8 w-full sm:w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-44 sm:h-48 group">
                <div class="w-2/3">
                    <h2 class="text-xl sm:text-2xl font-medium">SUV's</h2>
                    <h3 class="text-sm sm:text-base">{{ $typeCounts['SUV'] ?? 0 }} {{ ($typeCounts['SUV'] ?? 0) == 1 ? 'coche disponible' : 'coches disponibles' }}</h3>
                    <p class="block mt-6 sm:mt-8 text-lg sm:text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="relative w-full h-full overflow-hidden">
                    <img
                        src="{{ asset('storage/landing/SUV.svg') }}"
                        class="absolute right-[-30%] h-full max-h-32 object-contain transition-all duration-500 ease-in-out group-hover:right-[-10%]"
                        alt="SUV">
                </div>
            </a>

            <!-- CARD Sedán -->
            <a href="{{ route('vehicles.type', ['type' => 'Sedán']) }}" class="bg-[#8b82f6] text-white rounded-xl py-6 sm:py-8 pl-6 sm:pl-8 w-full sm:w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-44 sm:h-48 group">
                <div class="w-2/3">
                    <h2 class="text-xl sm:text-2xl font-medium">Sedán</h2>
                    <h3 class="text-sm sm:text-base">{{ $typeCounts['Sedán'] ?? 0 }} {{ ($typeCounts['Sedán'] ?? 0) == 1 ? 'coche disponible' : 'coches disponibles' }}</h3>
                    <p class="block mt-6 sm:mt-8 text-lg sm:text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="relative w-full h-full overflow-hidden">
                    <img
                        src="{{ asset('storage/landing/Sedan.svg') }}"
                        class="absolute right-[-40%] h-full max-h-32 object-contain transition-all duration-500 ease-in-out group-hover:right-[-20%]"
                        alt="Sedán">
                 </div>
            </a>

            <!-- CARD Deportivos -->
            <a href="{{ route('vehicles.type', ['type' => 'Deportivo']) }}" class="bg-[#8b82f6] text-white rounded-xl py-6 sm:py-8 pl-6 sm:pl-8 w-full sm:w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-44 sm:h-48 group">
                <div class="w-2/3">
                    <h2 class="text-xl sm:text-2xl font-medium">Deportivos</h2>
                    <h3 class="text-sm sm:text-base">{{ $typeCounts['Deportivo'] ?? 0 }} {{ ($typeCounts['Deportivo'] ?? 0) == 1 ? 'coche disponible' : 'coches disponibles' }}</h3>
                    <p class="block mt-6 sm:mt-8 text-lg sm:text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="relative w-full h-full overflow-hidden">
                    <img
                        src="{{ asset('storage/landing/Deportivos.svg') }}"
                        class="absolute right-[-40%] h-full max-h-32 object-contain transition-all duration-500 ease-in-out group-hover:right-[-20%]"
                        alt="Deportivos">
                 </div>
            </a>

            <!-- CARD Furgonetas -->
            <a href="{{ route('vehicles.type', ['type' => 'Furgoneta']) }}" class="bg-[#8b82f6] text-white rounded-xl py-6 sm:py-8 pl-6 sm:pl-8 w-full sm:w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-44 sm:h-48 group">
                <div class="w-2/3">
                    <h2 class="text-xl sm:text-2xl font-medium">Furgonetas</h2>
                    <h3 class="text-sm sm:text-base">{{ $typeCounts['Furgoneta'] ?? 0 }} {{ ($typeCounts['Furgoneta'] ?? 0) == 1 ? 'coche disponible' : 'coches disponibles' }}</h3>
                    <p class="block mt-6 sm:mt-8 text-lg sm:text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="relative w-full h-full overflow-hidden">
                    <img
                        src="{{ asset('storage/landing/Furgonetas.svg') }}"
                        class="absolute right-[-30%] h-full max-h-32 object-contain transition-all duration-500 ease-in-out group-hover:right-[-10%]"
                        alt="Furgonetas">
                 </div>
            </a>

            <!-- CARD Electricos -->
            <a href="{{ route('vehicles.type', ['type' => 'Electrico']) }}" class="bg-[#8b82f6] text-white rounded-xl py-6 sm:py-8 pl-6 sm:pl-8 w-full sm:w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-44 sm:h-48 group">
                <div class="w-2/3">
                    <h2 class="text-xl sm:text-2xl font-medium">Electricos</h2>
                    <h3 class="text-sm sm:text-base">{{ $typeCounts['Electrico'] ?? 0 }} {{ ($typeCounts['Electrico'] ?? 0) == 1 ? 'coche disponible' : 'coches disponibles' }}</h3>
                    <p class="block mt-6 sm:mt-8 text-lg sm:text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="relative w-full h-full overflow-hidden">
                    <img
                        src="{{ asset('storage/landing/Electricos.svg') }}"
                        class="absolute right-[-30%] h-full object-contain transition-all duration-500 ease-in-out group-hover:right-[-10%]"
                        alt="Electricos">
                 </div>
            </a>
        </div>
    </section>


<!-- Sección Nosotros -->
<section class="py-12">
    <div class="flex flex-col items-center justify-center max-w-6xl gap-8 mx-auto lg:flex-row lg:gap-12">
        <!-- Imagen -->
        <div class="w-full lg:w-1/2">
            <img class="w-full h-64 sm:h-80 lg:h-[400px] object-cover rounded-lg"
                 src="{{ asset('storage/landing/Nosotros.webp') }}">
        </div>

        <!-- Texto -->
        <div class="flex flex-col w-full gap-2 lg:w-1/2">
            <h4 class="text-lg sm:text-xl font-semibold tracking-widest text-black uppercase opacity-35">Nosotros</h4>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold leading-tight">La Experiencia QuantumCars</h2>
            <p class="text-base opacity-60 text-pretty">
            En <strong>QuantumCars</strong>, reinventamos la manera de alquilar vehículos. Creemos en un servicio transparente, sin complicaciones y totalmente adaptado a ti.

Desde el primer clic hasta la entrega de tu coche, nos aseguramos de que cada paso sea fácil, ágil y seguro. Nuestro compromiso es ofrecerte no solo un vehículo, sino una experiencia de conducción inigualable con total tranquilidad y confianza.
            </p>
            <a class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium self-start" href="{{ route('contact') }}">Conocer</a>
        </div>
    </div>
</section>

    <!-- Sección Servicios -->
    <section class="bg-gray-100">
    <h1 class="mb-8 text-2xl sm:text-3xl font-bold text-center">¿Qué nos diferencia?</h1>

    <div class="flex flex-col md:flex-row justify-around gap-6 max-w-6xl mx-auto">

    <div class="flex flex-col items-center justify-center w-full md:w-1/3 gap-4 p-6 text-center bg-white rounded align-center">
        <div class="bg-[#51cf2514] w-20 h-20 rounded-full flex items-center justify-center">
                <img class="w-10" src="https://cdn.prod.website-files.com/65c241b0beb6eb08772e7d90/65c241b0beb6eb08772e7dd2_done-mark.svg">
            </div>

            <h2 class="text-lg sm:text-xl font-medium">🚀 Reserva Rápida y Sin Complicaciones</h2>
            <h3 class="text-base opacity-60">Aprobación instantánea para que puedas disfrutar de tu vehículo en minutos, sin papeleo innecesario.</h3>
        </div>

        <div class="flex flex-col items-center justify-center w-full md:w-1/3 gap-4 p-6 text-center bg-white rounded align-center">
        <div class="bg-[#51cf2514] w-20 h-20 rounded-full flex items-center justify-center">
                <img class="w-10" src="https://cdn.prod.website-files.com/65c241b0beb6eb08772e7d90/65c241b0beb6eb08772e7dd2_done-mark.svg">
            </div>

            <h2 class="text-lg sm:text-xl font-medium">🌍 100% Digital y Sin Esfuerzo</h2>
            <h3 class="text-base opacity-60">Todo el proceso es completamente online, desde la selección hasta el pago, con una experiencia fluida y segura.</h3>
        </div>

        <div class="flex flex-col items-center justify-center w-full md:w-1/3 gap-4 p-6 text-center bg-white rounded align-center">
        <div class="bg-[#51cf2514] w-20 h-20 rounded-full flex items-center justify-center">
                <img class="w-10" src="https://cdn.prod.website-files.com/65c241b0beb6eb08772e7d90/65c241b0beb6eb08772e7dd2_done-mark.svg">
            </div>

            <h2 class="text-lg sm:text-xl font-medium">🔥 La mejor flota de vehículos</h2>
            <h3 class="text-base opacity-60">Solo los mejores coches, en perfecto estado y con el máximo confort para una experiencia premium.</h3>
        </div>

    </div>
    </section>

<!-- Sección Sobre Nosotros -->
<section class="py-12">
    <div class="flex flex-col items-center justify-center max-w-6xl gap-8 mx-auto lg:flex-row lg:gap-12">
                <!-- Texto -->
                <div class="flex flex-col w-full gap-2 lg:w-1/2">
            <h4 class="text-lg sm:text-xl font-semibold tracking-widest text-black uppercase opacity-35">Flota de vehículos</h4>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold leading-tight">Conduce la Diferencia</h2>
            <p class="text-base opacity-60 text-pretty">
            Nuestra flota está compuesta por vehículos de última generación, diseñados para ofrecerte el máximo confort, seguridad y rendimiento.

Desde SUVs de lujo hasta deportivos de alto rendimiento, cada coche está cuidadosamente seleccionado y mantenido en perfectas condiciones para que disfrutes de la mejor experiencia al volante.


            </p>
            <a class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium self-start" href="{{ route('contact') }}">Conocer</a>
        </div>

        <!-- Imagen -->
        <div class="w-full lg:w-1/2">
            <img class="w-full h-64 sm:h-80 lg:h-[400px] object-cover rounded-lg"
                 src="{{ asset('storage/landing/Flota.avif') }}">
        </div>


    </div>
</section>


</body>

@include('layouts.footer')
