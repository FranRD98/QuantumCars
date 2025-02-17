<x-guest-layout>
    <!-- Mensaje de estado de la sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md p-8 mx-auto bg-white rounded-lg">
        <h2 class="mb-6 text-2xl font-semibold text-center text-gray-700">Iniciar Sesión</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Correo Electrónico')" class="text-gray-700" />
                <x-text-input id="email" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Contraseña')" class="text-gray-700" />
                <x-text-input id="password" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Recordarme -->
            <div class="flex items-center mt-4">
                <input id="remember_me" type="checkbox" class="w-4 h-4 text-[#8b82f6] border-gray-300 rounded focus:ring-[#8b82f6]" name="remember">
                <label for="remember_me" class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</label>
            </div>

            <div class="flex flex-col mt-4 space-y-3">

                <x-primary-button class="text-center px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium">
                    {{ __('Iniciar Sesión') }}
                </x-primary-button>
                @if (Route::has('password.request'))
                    <a class="text-sm text-[#8b82f6] hover:text-[#6f64e7] underline transition text-center" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif
                
                <a class="text-sm text-[#8b82f6] hover:text-[#6f64e7] underline transition text-center" href="{{ route('login') }}">
                    {{ __('¿No tienes cuenta? Registrate') }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
