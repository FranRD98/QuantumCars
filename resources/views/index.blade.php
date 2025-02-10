@include('layouts.header', ['title' => 'QuantumCars Rent'])


    <!-- Sección Hero -->
    <section>
        <div>
            <h2 class="text-5xl font-semibold">Nuevo coche en un par de clicks</h2>
            <p class="mt-4 text-lg text-gray-500">Elige entre cientos de modelos y reserva al instante.</p>
            <img class="scale-x-[-1] ml-80 overflow-hidden" src="https://images-porsche.imgix.net/-/media/0683EEF17ADA4D6ABAA276C65235E96C_29BC6C3357784A859B8A0E4B36EE15F8_CZ25W14IX0010-911-carrera-4-gts-side?w=2560&h=697&q=45&crop=faces%2Centropy%2Cedges&auto=format">
        </div>
    </section>

    <!-- Sección de Búsqueda de Vehículos -->
    <section class="bg-gray-100">
        <h1 class="text-3xl font-bold text-center">Encuentra el coche ideal</h1>

        <div class="flex justify-center mt-8">

        <div class="flex flex-wrap justify-around gap-8">

            <!-- CARD Compactos -->

    <div class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
        <div class="w-2/3">
            <h2 class="text-2xl font-medium">Compactos</h2>
            <h3 class="text-base">X coches disponibles</h3>
            <a class="block mt-8 text-xl font-semibold" href="/vehicles/type/compactos">Descubrir vehículos</a>
        </div>
        <div class="w-full p-8 overflow-hidden">
            <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="https://images-porsche.imgix.net/-/media/646ED7CDD4DF4060A4823F3A9DB8DA22_97CB2E119D8749C19004EC939CD09E96_CZ25W01IX0010911-carrera-side?w=2560&h=697&q=45&crop=faces%2Centropy%2Cedges&auto=format">
        </div>
    </div>

    <!-- CARD SUV's -->
    <div class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
    <div class="w-2/3">
    <h2 class="text-2xl font-medium">SUV's</h2>
            <h3 class="text-base">X coches disponibles</h3>
            <a class="block mt-8 text-xl font-semibold" href="/vehicles/type/suvs">Descubrir vehículos</a>
        </div>
        <div class="w-full p-8 overflow-hidden">
            <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="https://images-porsche.imgix.net/-/media/4D5BD2E5FB5C4CECB0CB073CA5EF9E58_F4EED6B970AD4B68AABA7B6A9E5A3AB7_cayenne-gts-side?w=2560&h=811&q=45&crop=faces%2Centropy%2Cedges&auto=format">
        </div>
    </div>
    
    <!-- CARD Sedán -->
    <div class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
    <div class="w-2/3">
    <h2 class="text-2xl font-medium">Sedán</h2>
            <h3 class="text-base">X coches disponibles</h3>
            <a class="block mt-8 text-xl font-semibold" href="/vehicles/type/sedan">Descubrir vehículos</a>
        </div>
        <div class="w-full p-8 overflow-hidden">
            <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="https://images-porsche.imgix.net/-/media/C7ADC76FD1A84CEAAE7024CF325F2F2D_2E34FF94FDAE4D36B91A523A1431136A_panamera-4-e-hybrid-model-intro?w=2560&h=697&q=45&crop=faces%2Centropy%2Cedges&auto=format">
        </div>
    </div>

        <!-- CARD Deportivos -->
        <div class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
        <div class="w-2/3">
            <h2 class="text-2xl font-medium">Deportivos</h2>
            <h3 class="text-base">X coches disponibles</h3>
            <a class="block mt-8 text-xl font-semibold" href="/vehicles/type/deportivos">Descubrir vehículos</a>
        </div>
        <div class="w-full p-8 overflow-hidden">
            <img class="scale-x-[-1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="https://files.porsche.com/filestore/image/multimedia/none/992-gt3-rs-modelimage-sideshot/model/cfbb8ed3-1a15-11ed-80f5-005056bbdc38/porsche-model.png">
        </div>

    </div>

    <!-- CARD Furgonetas -->
    <div class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
    <div class="w-2/3">
    <h2 class="text-2xl font-medium">Furgonetas</h2>
            <h3 class="text-base">X coches disponibles</h3>
            <a class="block mt-8 text-xl font-semibold" href="/vehicles/type/furgonetas">Descubrir vehículos</a>
        </div>
        <div class="w-full p-8 overflow-hidden">
            <img class="scale-x-[1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="https://cdn.imagin.studio/getImage?angle=22&billingTag=web&customer=carwow&make=citroen&modelFamily=berlingo&modelRange=berlingo&modelVariant=cv&modelYear=2024&paintDescription=blanco-caolin&paintId=pspc0100&tailoring=carwow&width=1200&zoomLevel=0&zoomType=fullscreen">
        </div>
    </div>

    <!-- CARD Electricos -->
    <div class="bg-[#8b82f6] text-white rounded-xl py-8 pl-8 w-[48%] transition duration-300 hover:scale-105 flex flex-row items-center hover:shadow-[0px_10px_20px_#8b82f64d] h-48 group">
    <div class="w-2/3">
    <h2 class="text-2xl font-medium">Electricos</h2>
            <h3 class="text-base">X coches disponibles</h3>
            <a class="block mt-8 text-xl font-semibold" href="/vehicles/type/electricos">Descubrir vehículos</a>
        </div>
        <div class="w-full p-8 overflow-hidden">
            <img class="scale-x-[1.5] scale-y-[1.5] ml-40 transition-all duration-500 ease-in-out group-hover:ml-12" src="https://www.polestar.com/dato-assets/11286/1715697657-ps3-dark.png">
        </div>
    </div>

</div>

    </section>


<!-- Sección Nosotros -->
<section class="py-12">
    <div class="flex items-center justify-center max-w-6xl gap-12 mx-auto">
        <!-- Imagen -->
        <div class="w-1/2">
            <img class="w-full h-[400px] object-cover rounded-lg" 
                 src="https://images.pexels.com/photos/15476320/pexels-photo-15476320/free-photo-of-hombre-sentado-vehiculo-sonriente.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
        </div>

        <!-- Texto -->
        <div class="flex flex-col w-1/2 gap-2">
            <h4 class="text-xl font-semibold tracking-widest text-black uppercase opacity-35">Nosotros</h4>
            <h2 class="text-4xl font-semibold leading-tight">La Experiencia QuantumCars</h2>
            <p class="text-base opacity-60 text-pretty">
            En <strong>QuantumCars</strong>, reinventamos la manera de alquilar vehículos. Creemos en un servicio transparente, sin complicaciones y totalmente adaptado a ti.

Desde el primer clic hasta la entrega de tu coche, nos aseguramos de que cada paso sea fácil, ágil y seguro. Nuestro compromiso es ofrecerte no solo un vehículo, sino una experiencia de conducción inigualable con total tranquilidad y confianza.
            </p>
            <a class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="#">Conocer</a>
        </div>
    </div>
</section>

    <!-- Sección Servicios -->
    <section class="bg-gray-100">
    <h1 class="text-3xl font-bold text-center">¿Qué nos diferencia?</h1>

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
            <a class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="#">Conocer</a>
        </div>
        
        <!-- Imagen -->
        <div class="w-1/2">
            <img class="w-full h-[400px] object-cover rounded-lg" 
                 src="https://images.pexels.com/photos/29550422/pexels-photo-29550422/free-photo-of-la-vista-frontal-derecha-del-hyundai-initium-circulando-por-el-desierto.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2">
        </div>


    </div>
</section>


</body>

@include('layouts.footer')
