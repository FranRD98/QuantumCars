<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>

<!-- Header -->
<header class="fixed bg-white w-full top-0 z-[998] shadow-md h-20 text-base">
    <div class="flex items-center justify-between h-full max-w-6xl px-8 mx-auto">
        <!-- Logo -->
            <a href="{{ route('index') }}">
                <h1 class="text-2xl font-semibold hover:text-[#8b82f6] transition-all">QuantumCars Rent</h1>
            </a>

            <a href="{{ route('logout') }}">
                <h1 class="text-base hover:text-[#8b82f6] transition-all">Cerrar Sesión</h1>
            </a>
    </div>
</header>

<!-- Sidebar/Aside -->
<aside class="fixed mt-20 w-auto h-full text-[#050f23] bg-gray-100 shadow-lg">
<div class="p-6">
<h2>General</h2>

        <ul class="space-y-2">
            <li><a href="{{ route('index') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Inicio</a></li>
            <li><a href="{{ route('vehicle.index') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Vehículos</a></li>
            <li><a href="{{ route('faq') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Preguntas Frecuentes</a></li>
            <li><a href="{{ route('contact') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Contacto</a></li>
        </ul>
    </div>
    <hr>

    <div class="p-6">
    <h2>Admin</h2>

    <ul class="space-y-2">
    <li>
        <a href="{{ route('manage-cars') }}" 
           class="block px-4 py-2 transition-all {{ request()->routeIs('manage-cars') ? 'text-[#8b82f6]' : 'hover:text-[#8b82f6]' }}">
            Gestionar Coches
        </a>
    </li>
    <li>
        <a href="{{ route('warranty.index') }}" 
           class="block px-4 py-2 transition-all {{ request()->routeIs('warranty.index') ? 'text-[#8b82f6]' : 'hover:text-[#8b82f6]' }}">
            Gestionar Garantías
        </a>
    </li>
    <li>
        <a href="{{ route('manage-bookings') }}" 
           class="block px-4 py-2 transition-all {{ request()->routeIs('manage-bookings') ? 'text-[#8b82f6]' : 'hover:text-[#8b82f6]' }}">
            Gestionar Reservas
        </a>
    </li>
    <li>
        <a href="{{ route('manage-users') }}" 
           class="block px-4 py-2 transition-all {{ request()->routeIs('manage-users') ? 'text-[#8b82f6]' : 'hover:text-[#8b82f6]' }}">
            Gestionar Usuarios
        </a>
    </li>
</ul>

    </div>
</aside>

<!-- Contenido principal -->
<main class="p-8 ml-64">
    <!-- Aquí va el contenido principal de la página -->
</main>

</body>

</html>
