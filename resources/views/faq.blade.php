@include('layouts.header', ['title' => 'Preguntas Frecuentes | QuantumCars Rent'])

<section class="max-w-4xl py-16 mx-auto">
<h2 class="mb-8 text-3xl font-bold text-center">Preguntas Frecuentes</h2>
    
    <div class="space-y-6">
        <!-- Pregunta 1 -->
        <div class="pb-4 border-b border-gray-300">
            <button class="w-full flex justify-between items-center py-4 text-lg font-medium text-left hover:text-[#8b82f6] transition-all accordion-header">
                ¿Cómo puedo alquilar un vehículo?
                <span class="transition-transform transform rotate-0 accordion-icon">▼</span>
            </button>
            <div class="overflow-hidden transition-all duration-500 max-h-0 accordion-content">
                <p class="px-4 pb-4 text-gray-600">
                    Para alquilar un vehículo, simplemente selecciona el modelo que deseas, elige las fechas de alquiler y sigue los pasos de reserva. Puedes pagar en línea de forma segura y recibir confirmación al instante.
                </p>
            </div>
        </div>

        <!-- Pregunta 2 -->
        <div class="pb-4 border-b border-gray-300">
            <button class="w-full flex justify-between items-center py-4 text-lg font-medium text-left hover:text-[#8b82f6] transition-all accordion-header">
                ¿Qué métodos de pago aceptan?
                <span class="transition-transform transform rotate-0 accordion-icon">▼</span>
            </button>
            <div class="overflow-hidden transition-all duration-500 max-h-0 accordion-content">
                <p class="px-4 pb-4 text-gray-600">
                    Aceptamos tarjetas de crédito y débito Visa, Mastercard y American Express, así como pagos mediante PayPal y transferencias bancarias.
                </p>
            </div>
        </div>

        <!-- Pregunta 3 -->
        <div class="pb-4 border-b border-gray-300">
            <button class="w-full flex justify-between items-center py-4 text-lg font-medium text-left hover:text-[#8b82f6] transition-all accordion-header">
                ¿Cuáles son los requisitos para alquilar un coche?
                <span class="transition-transform transform rotate-0 accordion-icon">▼</span>
            </button>
            <div class="overflow-hidden transition-all duration-500 max-h-0 accordion-content">
                <p class="px-4 pb-4 text-gray-600">
                    Debes ser mayor de 21 años, tener un permiso de conducir válido con al menos un año de antigüedad y una tarjeta de crédito a tu nombre para el depósito de garantía.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const icon = button.querySelector('.accordion-icon');

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            icon.style.transform = "rotate(0deg)";
        } else {
            document.querySelectorAll('.accordion-content').forEach(item => item.style.maxHeight = null);
            document.querySelectorAll('.accordion-icon').forEach(icon => icon.style.transform = "rotate(0deg)");
            
            content.style.maxHeight = content.scrollHeight + "px";
            icon.style.transform = "rotate(180deg)";
        }
    });
});
</script>

@include('layouts.footer')

