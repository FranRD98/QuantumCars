@include('layouts.header', ['title' => 'QuantumCars Rent'])


    <!-- Sección Hero -->
    <section>
        <div>
            <h2 class="text-5xl font-semibold">Nuevo coche en un par de clicks</h2>
            <p class="mt-4 text-lg text-gray-500">Elige entre cientos de modelos y reserva al instante.</p>
            <img class="scale-x-[-1] ml-80 overflow-hidden" src="{{ asset('storage/landing/heroSection.png') }}">        
        </div>
    </section>

    <!-- Sección de Búsqueda de Vehículos -->
    <section class="bg-gray-100">
        <h1 class="my-8 text-3xl font-bold text-center">Encuentra el coche ideal</h1>

        <div class="flex flex-wrap justify-around gap-8">
            <!-- CARD Compactos -->
            <a href="{{ route('vehicles.type', ['type' => 'Compacto']) }}" class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
                <div class="w-2/3">
                    <h2 class="text-2xl font-medium">Compactos</h2>
                    <h3 class="text-base">X coches disponibles</h3>
                    <p class="block mt-8 text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="w-full p-8 overflow-hidden">
                    <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="{{ asset('storage/landing/Compactos.avif') }}">
                </div>
            </a>

            <!-- CARD SUV's -->
            <a href="{{ route('vehicles.type', ['type' => 'SUV']) }}" class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
                <div class="w-2/3">
                    <h2 class="text-2xl font-medium">SUV's</h2>
                    <h3 class="text-base">X coches disponibles</h3>
                    <p class="block mt-8 text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="w-full p-8 overflow-hidden">
                    <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="{{ asset('storage/landing/SUV.avif') }}">
                </div>
            </a>

            <!-- CARD Sedán -->
            <a href="{{ route('vehicles.type', ['type' => 'Sedán']) }}" class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
                <div class="w-2/3">
                    <h2 class="text-2xl font-medium">Sedán</h2>
                    <h3 class="text-base">X coches disponibles</h3>
                    <p class="block mt-8 text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="w-full p-8 overflow-hidden">
                    <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="{{ asset('storage/landing/Sedan.avif') }}">
                </div>
            </a>

            <!-- CARD Deportivos -->
            <a href="{{ route('vehicles.type', ['type' => 'Deportivo']) }}" class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
                <div class="w-2/3">
                    <h2 class="text-2xl font-medium">Deportivos</h2>
                    <h3 class="text-base">X coches disponibles</h3>
                    <p class="block mt-8 text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="w-full p-8 overflow-hidden">
                    <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="{{ asset('storage/landing/Deportivos.png') }}">
                </div>
            </a>

            <!-- CARD Furgonetas -->
            <a href="{{ route('vehicles.type', ['type' => 'Furgoneta']) }}" class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
                <div class="w-2/3">
                    <h2 class="text-2xl font-medium">Furgonetas</h2>
                    <h3 class="text-base">X coches disponibles</h3>
                    <p class="block mt-8 text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="w-full p-8 overflow-hidden">
                    <img class="scale-x-[1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="{{ asset('storage/landing/Furgonetas.webp') }}">
                </div>
            </a>

            <!-- CARD Electricos -->
            <a href="{{ route('vehicles.type', ['type' => 'Electrico']) }}" class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
                <div class="w-2/3">
                    <h2 class="text-2xl font-medium">Electricos</h2>
                    <h3 class="text-base">X coches disponibles</h3>
                    <p class="block mt-8 text-xl font-semibold">Descubrir vehículos</p>
                </div>
                <div class="w-full p-8 overflow-hidden">
                    <img class="scale-x-[1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="{{ asset('storage/landing/Electricos.avif') }}">
                </div>
            </a>
        </div>
    </section>


<!-- Sección Nosotros -->
<section class="py-12">
    <div class="flex items-center justify-center max-w-6xl gap-12 mx-auto">
        <!-- Imagen -->
        <div class="w-1/2">
            <img class="w-full h-[400px] object-cover rounded-lg" 
                 src="{{ asset('storage/landing/Nosotros.webp') }}">
        </div>

        <!-- Texto -->
        <div class="flex flex-col w-1/2 gap-2">
            <h4 class="text-xl font-semibold tracking-widest text-black uppercase opacity-35">Nosotros</h4>
            <h2 class="text-4xl font-semibold leading-tight">La Experiencia QuantumCars</h2>
            <p class="text-base opacity-60 text-pretty">
            En <strong>QuantumCars</strong>, reinventamos la manera de alquilar vehículos. Creemos en un servicio transparente, sin complicaciones y totalmente adaptado a ti.

Desde el primer clic hasta la entrega de tu coche, nos aseguramos de que cada paso sea fácil, ágil y seguro. Nuestro compromiso es ofrecerte no solo un vehículo, sino una experiencia de conducción inigualable con total tranquilidad y confianza.
            </p>
            <a class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="{{ route('contact') }}">Conocer</a>
        </div>
    </div>
</section>

    <!-- Sección Servicios -->
    <section class="bg-gray-100">
    <h1 class="mb-8 text-3xl font-bold text-center">¿Qué nos diferencia?</h1>

    <div class="flex flex-row justify-around gap-6">

    <div class="flex flex-col items-center justify-center w-1/3 gap-4 p-6 text-center bg-white rounded align-center">
        <div class="bg-[#51cf2514] w-20 h-20 rounded-full flex items-center justify-center">
                <img class="w-10" src="https://cdn.prod.website-files.com/65c241b0beb6eb08772e7d90/65c241b0beb6eb08772e7dd2_done-mark.svg">
            </div>

            <h2 class="text-xl font-medium">🚀 Reserva Rápida y Sin Complicaciones</h2>
            <h3 class="text-base opacity-60">Aprobación instantánea para que puedas disfrutar de tu vehículo en minutos, sin papeleo innecesario.</h3>
        </div>

        <div class="flex flex-col items-center justify-center w-1/3 gap-4 p-6 text-center bg-white rounded align-center">
        <div class="bg-[#51cf2514] w-20 h-20 rounded-full flex items-center justify-center">
                <img class="w-10" src="https://cdn.prod.website-files.com/65c241b0beb6eb08772e7d90/65c241b0beb6eb08772e7dd2_done-mark.svg">
            </div>

            <h2 class="text-xl font-medium">🌍 100% Digital y Sin Esfuerzo</h2>
            <h3 class="text-base opacity-60">Todo el proceso es completamente online, desde la selección hasta el pago, con una experiencia fluida y segura.</h3>
        </div>

        <div class="flex flex-col items-center justify-center w-1/3 gap-4 p-6 text-center bg-white rounded align-center">
        <div class="bg-[#51cf2514] w-20 h-20 rounded-full flex items-center justify-center">
                <img class="w-10" src="https://cdn.prod.website-files.com/65c241b0beb6eb08772e7d90/65c241b0beb6eb08772e7dd2_done-mark.svg">
            </div>

            <h2 class="text-xl font-medium">🔥 La mejor flota de vehículos</h2>
            <h3 class="text-base opacity-60">Solo los mejores coches, en perfecto estado y con el máximo confort para una experiencia premium.</h3>
        </div>
        
    </div>
    </section>
    
<!-- Sección Sobre Nosotros -->
<section class="py-12">
    <div class="flex items-center justify-center max-w-6xl gap-12 mx-auto">
                <!-- Texto -->
                <div class="flex flex-col w-1/2 gap-2">
            <h4 class="text-xl font-semibold tracking-widest text-black uppercase opacity-35">Flota de vehículos</h4>
            <h2 class="text-4xl font-semibold leading-tight">Conduce la Diferencia</h2>
            <p class="text-base opacity-60 text-pretty">
            Nuestra flota está compuesta por vehículos de última generación, diseñados para ofrecerte el máximo confort, seguridad y rendimiento.

Desde SUVs de lujo hasta deportivos de alto rendimiento, cada coche está cuidadosamente seleccionado y mantenido en perfectas condiciones para que disfrutes de la mejor experiencia al volante.


            </p>
            <a class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="{{ route('contact') }}">Conocer</a>
        </div>
        
        <!-- Imagen -->
        <div class="w-1/2">
            <img class="w-full h-[400px] object-cover rounded-lg" 
                 src="{{ asset('storage/landing/Flota.avif') }}">
        </div>


    </div>
</section>


</body>

@include('layouts.footer')
