<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">

<!-- Banner Superior -->
<section class="bg-[#8b82f6] py-2 text-sm text-white flex justify-center group">
    <div class="flex items-center gap-2 px-4">
    <span class="transition-all duration-[3000ms] transform translate-x-0 group-hover:-translate-x-[600px]">🚗</span>
    <p class="text-center">Nuevos vehículos cada semana!</p>
        <a href="{{ route('vehicle.index') }}" class="font-bold hover:underline">Descubrir</a>
    <span class="transition-all duration-[3000ms] transform scale-x-[-1] group-hover:-translate-x-[-600px]">🚗</span>
    </div>
</section>

<!-- Header -->
<header class="bg-white w-full sticky top-0 z-[998] shadow-md h-20 text-base">
    <div class="flex items-center justify-between h-full max-w-6xl px-8 mx-auto">
        <!-- Logo -->
        <div class="flex justify-start flex-1">
            <a href="{{ route('index') }}">
                <h1 class="text-2xl font-semibold hover:text-[#8b82f6] transition-all">QuantumCars Rent</h1>
            </a>
        </div>

        <!-- Navegación -->
        <nav class="flex justify-center flex-1 gap-6">
            <a href="{{ route('vehicle.index') }}" class="hover:text-[#8b82f6] transition-all">Vehículos</a>
            <a href="{{ route('faq') }}" class="hover:text-[#8b82f6] transition-all">Preguntas Frecuentes</a>
            <a href="{{ route('contact') }}" class="hover:text-[#8b82f6] transition-all">Contacto</a>
        </nav>

        <!-- Acceder -->
        <div class="flex justify-end flex-1">
            <ul>

            @if(auth()->check())
                    @if(auth()->user()->isAdmin())
                        <li class="relative inline-block group">
                            <a href="#">Panel Admin</a>
                            <ul class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-300 visibility-hidden group-hover:visible bg-white shadow-lg min-w-[150px] p-2 rounded-md z-10">
                                <li><a href="{{ route('manage-cars') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Gestionar Coches</a></li>
                                <li><a href="{{ route('manage-bookings') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Gestionar Reservas</a></li>
                                <li><a href="{{ route('manage-users') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Gestionar Usuarios</a></li>
                                <li><a href="{{ route('logout') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Cerrar Sesión</a></li>
                            </ul>
                        </li>

                    @elseif(auth()->user()->isCliente())
                    <li class="relative inline-block group">
                            <a href="#">Mi Cuenta</a>
                            <ul class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-300 visibility-hidden group-hover:visible bg-white shadow-lg min-w-[150px] p-2 rounded-md z-10">
                                <li><a href="#" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Mis Reservas</a></li>
                                <!--<li><a href="{{ route('profile') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Mi Perfil</a></li>-->
                                <li><a href="{{ route('logout') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Cerrar Sesión</a></li>
                            </ul>
                        </li>                    
                    @endif
                @else
                <li class="relative inline-block group">
                    <a href="#">Acceder o registrarse</a>
                    <ul class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-300 visibility-hidden group-hover:visible bg-white shadow-lg min-w-[150px] p-2 rounded-md z-10">
                        <li><a href="{{ route('login') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Iniciar Sesión</a></li>
                        <li><a href="{{ route('register') }}" class="block px-4 py-2 hover:text-[#8b82f6] transition-all">Registrarse</a></li>
                    </ul>
                </li>
                @endif

            </ul>
        </div>
</header>
