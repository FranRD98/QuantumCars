@include('layouts.header', ['title' => 'Contacto | QuantumCars Rent'])

<!-- Sección Hero -->
<section class="py-16 text-center bg-gray-100">
    <h1 class="text-5xl font-semibold">Contáctanos</h1>
    <p class="mt-4 text-lg text-gray-600">¿Tienes preguntas? Estamos aquí para ayudarte.</p>
</section>

<!-- Sección de Contacto -->
<section class="max-w-6xl px-6 py-16 mx-auto">
    <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
        
        <!-- Información de Contacto -->
        <div class="space-y-6">
            <h2 class="text-3xl font-semibold">¿Cómo podemos ayudarte?</h2>
            <p class="text-gray-600">Si necesitas más información sobre nuestros servicios o tienes alguna consulta, no dudes en escribirnos.</p>
            
            <div class="space-y-4">
                <div class="flex items-center gap-4">
                    <span class="text-[#8b82f6] text-2xl">📍</span>
                    <p class="text-gray-700">Calle Principal 123, Madrid, España</p>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-[#8b82f6] text-2xl">📞</span>
                    <p class="text-gray-700">+34 600 123 456</p>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-[#8b82f6] text-2xl">📧</span>
                    <p class="text-gray-700">info@quantumcars.com</p>
                </div>
            </div>

            <h3 class="mt-6 text-xl font-medium">Horario de atención</h3>
            <p class="text-gray-600">Lunes a Viernes: 09:00 - 18:00</p>
            <p class="text-gray-600">Sábados: 10:00 - 14:00</p>
        </div>

        <!-- Formulario de Contacto -->
        <div class="p-8 bg-white rounded-lg shadow-lg">
            <h2 class="mb-4 text-2xl font-semibold">Envíanos un mensaje</h2>
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Nombre</label>
                    <input type="text" name="nombre" required class="w-full p-3 border rounded-lg focus:outline-[#8b82f6]">
                </div>
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" name="email" required class="w-full p-3 border rounded-lg focus:outline-[#8b82f6]">
                </div>
                <div>
                    <label class="block mb-2 font-medium text-gray-700">Mensaje</label>
                    <textarea name="mensaje" rows="4" required class="w-full p-3 border rounded-lg focus:outline-[#8b82f6]"></textarea>
                </div>
                <button type="submit" class="w-full bg-[#8b82f6] text-white py-3 rounded-lg font-medium hover:bg-[#7169e0] transition">
                    Enviar Mensaje
                </button>
            </form>
        </div>
        
    </div>
</section>

<!-- Mapa -->
<section class="w-full h-80">
    <iframe 
        class="w-full h-full"
        loading="lazy"
        allowfullscreen
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24275.913116326287!2d-3.7037902!3d40.4167754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422997800a7593%3A0x1f7b045b5b63f1c5!2sMadrid%2C%20Spain!5e0!3m2!1sen!2ses!4v1676140071203!5m2!1sen!2ses">
    </iframe>
</section>

@include('layouts.footer')
