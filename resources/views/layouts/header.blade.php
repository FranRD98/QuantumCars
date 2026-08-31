<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg?v=2">
    <link rel="alternate icon" href="/favicon.ico">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-x-hidden">

<!-- Banner Superior -->
<section class="bg-[#8b82f6] py-2 text-xs sm:text-sm text-white flex justify-center group !px-4">
    <div class="flex items-center gap-2 text-center">
    <span class="hidden sm:inline transition-all duration-[3000ms] transform translate-x-0 group-hover:-translate-x-[600px]">🚗</span>
    <p class="text-center">Nuevos vehículos cada semana!</p>
        <a href="{{ route('vehicle.index') }}" class="font-bold hover:underline">Descubrir</a>
    <span class="hidden sm:inline transition-all duration-[3000ms] transform scale-x-[-1] group-hover:-translate-x-[-600px]">🚗</span>
    </div>
</section>

<!-- Header -->
<header x-data="{ open: false }" class="bg-white w-full sticky top-0 z-[998] shadow-md text-base">
    <div class="flex items-center justify-between h-16 lg:h-20 max-w-6xl px-4 sm:px-8 mx-auto">
        <!-- Logo -->
        <div class="flex justify-start lg:flex-1">
            <a href="{{ route('index') }}">
                <h1 class="text-xl sm:text-2xl font-semibold hover:text-[#8b82f6] transition-all">QuantumCars Rent</h1>
            </a>
        </div>

        <!-- Navegación (escritorio) -->
        <nav class="hidden lg:flex justify-center flex-1 gap-6">
            <a href="{{ route('vehicle.index') }}" class="hover:text-[#8b82f6] transition-all">Vehículos</a>
            <a href="{{ route('faq') }}" class="hover:text-[#8b82f6] transition-all">Preguntas Frecuentes</a>
            <a href="{{ route('contact') }}" class="hover:text-[#8b82f6] transition-all">Contacto</a>
        </nav>

        <!-- Acceder (escritorio) -->
        <div class="hidden lg:flex justify-end flex-1">
            <ul>
            @if(auth()->check())
                    @if(auth()->user()->isAdmin())
                        <li class="relative inline-block group">
                        <div>¡Bienvenido/a {{ Auth::user()->name }}!*</div>
                        <ul class="absolute right-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 visibility-hidden group-hover:visible bg-white shadow-lg min-w-[150px] p-2 rounded-md z-10">
                                <li><a href="{{ route('manage-cars') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Gestionar Coches</a></li>
                                <li><a href="{{ route('manage-bookings') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Gestionar Reservas</a></li>
                                <li><a href="{{ route('manage-users') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Gestionar Usuarios</a></li>
                                <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 hover:text-[#8b82f6] transition-all">
                Cerrar Sesión
            </button>
        </form>                            </ul>
                        </li>

                    @elseif(auth()->user()->isCliente())
                    <li class="relative inline-block group">
                            <div>¡Bienvenido/a {{ Auth::user()->name }}!</div>
                            <ul class="absolute right-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 visibility-hidden group-hover:visible bg-white shadow-lg min-w-[150px] p-2 rounded-md z-10">
    <li><a href="{{ route('user.bookings', ['id' => auth()->id()]) }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Mis Reservas</a></li>
    <li><a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Mi Perfil</a></li>
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="block w-full text-left px-4 py-2 hover:text-[#8b82f6] transition-all">
                Cerrar Sesión
            </button>
        </form>
    </li>
</ul>

                        </li>
                    @endif
                @else
                <li class="relative inline-block group">
                    <a href="#">Acceder o registrarse</a>
                    <ul class="absolute right-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 visibility-hidden group-hover:visible bg-white shadow-lg min-w-[150px] p-2 rounded-md z-10">
                        <li><a href="{{ route('login') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Iniciar Sesión</a></li>
                        <li><a href="{{ route('register') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Registrarse</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>

        <!-- Botón hamburguesa (móvil) -->
        <button @click="open = !open" class="lg:hidden inline-flex items-center justify-center p-2 -mr-2 text-gray-600 rounded-md hover:bg-gray-100 focus:outline-none" aria-label="Abrir menú">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Menú móvil -->
    <div x-show="open" x-cloak class="lg:hidden border-t border-gray-100 bg-white">
        <nav class="flex flex-col px-4 py-3 space-y-1">
            <a href="{{ route('vehicle.index') }}" class="py-2 hover:text-[#8b82f6] transition-all">Vehículos</a>
            <a href="{{ route('faq') }}" class="py-2 hover:text-[#8b82f6] transition-all">Preguntas Frecuentes</a>
            <a href="{{ route('contact') }}" class="py-2 hover:text-[#8b82f6] transition-all">Contacto</a>

            <hr class="my-2">

            @if(auth()->check())
                @if(auth()->user()->isAdmin())
                    <span class="py-2 font-medium text-gray-500">¡Bienvenido/a {{ Auth::user()->name }}!</span>
                    <a href="{{ route('manage-cars') }}" class="py-2 hover:text-[#8b82f6] transition-all">Gestionar Coches</a>
                    <a href="{{ route('manage-bookings') }}" class="py-2 hover:text-[#8b82f6] transition-all">Gestionar Reservas</a>
                    <a href="{{ route('manage-users') }}" class="py-2 hover:text-[#8b82f6] transition-all">Gestionar Usuarios</a>
                @elseif(auth()->user()->isCliente())
                    <span class="py-2 font-medium text-gray-500">¡Bienvenido/a {{ Auth::user()->name }}!</span>
                    <a href="{{ route('user.bookings', ['id' => auth()->id()]) }}" class="py-2 hover:text-[#8b82f6] transition-all">Mis Reservas</a>
                    <a href="{{ route('profile.edit') }}" class="py-2 hover:text-[#8b82f6] transition-all">Mi Perfil</a>
                @endif
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full py-2 text-left hover:text-[#8b82f6] transition-all">Cerrar Sesión</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="py-2 hover:text-[#8b82f6] transition-all">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="py-2 hover:text-[#8b82f6] transition-all">Registrarse</a>
            @endif
        </nav>
    </div>
</header>
