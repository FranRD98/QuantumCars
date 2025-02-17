@include('layouts.header', ['title' => 'Editar Perfil | QuantumCars Rent'])

<section class="py-12 bg-gray-50">
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <!-- Título Principal -->
        <h1 class="text-3xl font-bold text-center text-[#8b82f6]">Editar Perfil</h1>
        
        <!-- Información de perfil -->
        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
            <h2 class="text-2xl font-semibold text-[#4a4a4a] mb-4">Información de Perfil</h2>
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Cambiar Contraseña -->
        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
            <h2 class="text-2xl font-semibold text-[#4a4a4a] mb-4">Cambiar Contraseña</h2>
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Eliminar cuenta -->
        <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
            <h2 class="text-2xl font-semibold text-[#4a4a4a] mb-4">Eliminar Cuenta</h2>
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
