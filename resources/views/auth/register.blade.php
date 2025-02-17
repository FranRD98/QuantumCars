<x-guest-layout>
    <div class="max-w-md p-8 mx-auto bg-white rounded-lg">
        <h2 class="mb-6 text-2xl font-semibold text-center text-gray-700">Registro</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nombre -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" class="text-gray-700" />
                <x-text-input id="name" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Correo Electrónico -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Correo Electrónico')" class="text-gray-700" />
                <x-text-input id="email" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Contraseña -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" class="text-gray-700" />
                <x-text-input id="password" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" class="text-gray-700" />
                <x-text-input id="password_confirmation" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex flex-col mt-4 space-y-3">
                <a class="text-sm text-[#8b82f6] hover:text-[#6f64e7] underline transition text-center" href="{{ route('login') }}">
                    {{ __('¿Ya tienes cuenta? Inicia sesión aquí') }}
                </a>

                <x-primary-button class="w-full text-center bg-[#8b82f6] hover:bg-[#6f64e7] text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    {{ __('Registrarse') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
