<x-guest-layout>
    <div class="max-w-md p-8 mx-auto bg-white rounded-lg shadow-md">
        <h2 class="mb-4 text-2xl font-semibold text-center text-gray-700">Recuperar Contraseña</h2>

        <p class="mb-4 text-sm text-center text-gray-600">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Ingresa tu correo electrónico y te enviaremos un enlace para restablecerla.') }}
        </p>

        <!-- Estado de la sesión -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Correo Electrónico -->
            <div>
                <x-input-label for="email" :value="__('Correo Electrónico')" class="text-gray-700" />
                <x-text-input id="email" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" 
                              type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex flex-col mt-6 space-y-3">
                <x-primary-button class="w-full text-center bg-[#8b82f6] hover:bg-[#6f64e7] text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    {{ __('Enviar Enlace de Restablecimiento') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
