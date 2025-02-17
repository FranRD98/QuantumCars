<x-guest-layout>
    <div class="max-w-md p-8 mx-auto bg-white rounded-lg shadow-md">
        <h2 class="mb-6 text-2xl font-semibold text-center text-gray-700">Restablecer Contraseña</h2>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Token de Restablecimiento -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Correo Electrónico -->
            <div>
                <x-input-label for="email" :value="__('Correo Electrónico')" class="text-gray-700" />
                <x-text-input id="email" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" 
                              type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Nueva Contraseña -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Nueva Contraseña')" class="text-gray-700" />
                <x-text-input id="password" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" 
                              type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirmar Contraseña -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" class="text-gray-700" />
                <x-text-input id="password_confirmation" class="block w-full mt-1 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]" 
                              type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex flex-col mt-6 space-y-3">
                <x-primary-button class="w-full text-center bg-[#8b82f6] hover:bg-[#6f64e7] text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    {{ __('Restablecer Contraseña') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
