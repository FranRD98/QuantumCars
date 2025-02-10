    <!-- Footer -->
    <footer class="py-16 px-16 text-sm bg-[#050f23] text-[#8e939b]">
        <div class="flex items-center justify-around ">
            <div>
                <h1 class="text-2xl font-bold text-white">QuantumCars Rent</h1>
            </div>
            <div>
                <div>
                    <h2 class="text-xl font-bold text-white">Menu</h2>
                        <nav class="flex flex-col">
                            <a href="{{ route('vehicle.index') }}" class="text-base transition-all duration-500 hover:text-white">Vehículos</a>
                            <a href="{{ route('faq') }}" class="text-base transition-all duration-500 hover:text-white">Preguntas Frecuentes</a>
                            <a href="{{ route('contact') }}" class="text-base transition-all duration-500 hover:text-white">Contactar</a>
                        </nav>
                </div>
            </div>
            <div>
            <div>
                <h2 class="text-xl font-bold text-white">Contacto</h2>
                <nav class="flex flex-col">
                    <a href="tel:+34600123456" class="text-base transition-all duration-500 hover:text-white">+34 600 123 456</a>
                    <a href="mailto:info@quantumcars.com" class="text-base transition-all duration-500 hover:text-white">info@quantumcars.com</a>
                </nav>
            </div>
            <div>
                <h2 class="text-xl font-bold text-white">ADMIN</h2>
                <nav class="flex flex-col">
                    <a href="http://localhost/admin/manage-cars" class="text-base transition-all duration-500 hover:text-white">Crear coche</a>
                    <a href="http://localhost/admin/manage-warranties" class="text-base transition-all duration-500 hover:text-white">Crear Garantía</a>
                </nav>
            </div>



            </div>
        </div>
        <hr class="bg-[#8e939b] opacity-30 my-6">
        <div class="flex flex-row items-center justify-around">
            <h1>🚀 Powered By Laravel</h1>
            <h1>2025 QuantumCars Rent by Fran Riera</h1>
        </div>
    </footer>
</html>