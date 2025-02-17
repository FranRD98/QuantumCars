<section class="space-y-6">
    <header>
        <h2 class="text-lg font-semibold text-gray-800">
            {{ __('Eliminar Cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Una vez que elimines tu cuenta, todos tus datos y recursos se perderán de forma permanente. Antes de continuar, asegúrate de descargar cualquier información que desees conservar.') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-4 py-2 font-medium text-white transition duration-300 bg-red-600 rounded-lg hover:bg-red-700"
    >
        {{ __('Eliminar Cuenta') }}
    </x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('¿Estás seguro de que quieres eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Esta acción es irreversible. Por favor, ingresa tu contraseña para confirmar la eliminación de tu cuenta.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4 p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]"
                    placeholder="{{ __('Contraseña') }}"
                    required
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-6 space-x-3">
                <x-secondary-button x-on:click="$dispatch('close')" class="px-4 py-2 text-gray-700 transition duration-300 rounded-lg hover:bg-gray-100">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="px-4 py-2 font-medium text-white transition duration-300 bg-red-600 rounded-lg hover:bg-red-700">
                    {{ __('Eliminar Cuenta') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
