<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('car_icon.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ sidebarOpen: false }">

<!-- Header -->
<header class="fixed bg-white w-full top-0 z-[999] shadow-md h-16 lg:h-20 text-base">
    <div class="flex items-center justify-between h-full max-w-6xl gap-4 px-4 sm:px-8 mx-auto">
        <div class="flex items-center gap-3">
            <!-- Botón menú (móvil) -->
            <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden inline-flex items-center justify-center p-2 -ml-2 text-gray-600 rounded-md hover:bg-gray-100 focus:outline-none" aria-label="Abrir menú">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Logo -->
            <a href="{{ route('index') }}">
                <h1 class="text-lg sm:text-2xl font-semibold hover:text-[#8b82f6] transition-all">QuantumCars Rent</h1>
            </a>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block px-3 sm:px-4 py-2 text-left hover:text-[#8b82f6] transition-all">
                Cerrar Sesión
            </button>
        </form>
    </div>
</header>

<!-- Backdrop (móvil) -->
<div x-show="sidebarOpen" x-cloak @click="sidebarOpen = false" class="fixed inset-0 z-[997] bg-black/40 lg:hidden"></div>

<!-- Sidebar/Aside -->
<aside class="fixed top-16 lg:top-20 bottom-0 left-0 z-[998] w-64 text-[#050f23] bg-gray-100 shadow-lg overflow-y-auto hidden lg:block"
       :class="{ '!block': sidebarOpen }">
    <div class="p-6">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('manage-cars') }}"
                   class="block px-4 py-2 transition-all {{ request()->routeIs('manage-cars') ? 'text-[#8b82f6]' : 'hover:text-[#8b82f6]' }}">
                    Gestionar Coches
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

</body>

</html>
