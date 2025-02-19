<section>
    <header>
        <h2 class="text-lg font-semibold text-gray-800">
            {{ __('Actualizar Contraseña') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Asegúrate de utilizar una contraseña larga y aleatoria para mantener tu cuenta segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Contraseña Actual')" />
            <x-text-input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                class="mt-1 block w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]"
                autocomplete="current-password" 
                required 
            />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Nueva Contraseña')" />
            <x-text-input 
                id="update_password_password" 
                name="password" 
                type="password" 
                class="mt-1 block w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]"
                autocomplete="new-password" 
                required 
            />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmar Nueva Contraseña')" />
            <x-text-input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="mt-1 block w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]"
                autocomplete="new-password" 
                required 
            />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-[#8b82f6] hover:bg-[#6f68e5] text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                {{ __('Guardar') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600"
                >
                    {{ __('Contraseña actualizada.') }}
                </p>
            @endif
        </div>
    </form>
</section>
