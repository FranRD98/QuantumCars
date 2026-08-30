    <!-- Footer -->
    <footer class="px-6 py-10 text-sm sm:px-16 sm:py-16 bg-[#050f23] text-[#8e939b]">
        <div class="flex flex-col gap-8 sm:flex-row sm:items-start sm:justify-around">
            <div>
                <h1 class="text-2xl font-bold text-white">QuantumCars Rent</h1>
            </div>
            <div>
                <div>
                    <h2 class="text-xl font-bold text-white">Menu</h2>
                        <nav class="flex flex-col">
                            <a href="{{ route('vehicle.index') }}" class="text-base transition-all duration-500 hover:text-white">Vehículos</a>
                            <a href="{{ route('faq') }}" class="text-base transition-all duration-500 hover:text-white">Preguntas Frecuentes</a>
                            <a href="{{ route('terms') }}" class="text-base transition-all duration-500 hover:text-white">Terminos y condiciones</a>
                        </nav>
                </div>
            </div>
            <div>
            <div>
                <h2 class="text-xl font-bold text-white">Contacto</h2>
                <nav class="flex flex-col">
                    <a href="tel:+34600123456" class="text-base transition-all duration-500 hover:text-white">+34 600 123 456</a>
                    <a href="mailto:info@quantumcars.com" class="text-base transition-all duration-500 hover:text-white">info@quantumcars.com</a>
                    <a href="{{ route('contact') }}" class="text-base transition-all duration-500 hover:text-white">Contactar</a>
                </nav>
            </div>

            </div>
        </div>
        <hr class="bg-[#8e939b] opacity-30 my-6">
        <div class="flex flex-col items-center gap-2 text-center sm:flex-row sm:justify-around">
            <h1>🚀 Powered By Laravel</h1>
            <h1>2025 QuantumCars Rent by Fran Riera</h1>
        </div>
    </footer>
</html>
