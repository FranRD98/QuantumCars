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
        <a href="{{ route('vehicles') }}" class="font-bold hover:underline">Descubrir</a>
    <span class="transition-all duration-[3000ms] transform scale-x-[-1] group-hover:-translate-x-[-600px]">🚗</span>
    </div>
</section>

<!-- Header -->
<header class="bg-white w-full sticky top-0 z-[998] shadow-md h-20 text-base">
    <div class="flex items-center justify-between h-full max-w-6xl px-8 mx-auto">
        <!-- Logo -->
        <div class="flex justify-start flex-1">
            <a href="{{ route('index') }}">
                <h1 class="text-2xl font-bold hover:text-[#8b82f6] transition-all">QuantumCars Rent</h1>
            </a>
        </div>

        <!-- Navegación -->
        <nav class="flex justify-center flex-1 gap-6">
            <a href="{{ route('vehicles') }}" class="hover:text-[#8b82f6] transition-all">Vehículos</a>
            <a href="{{ route('faq') }}" class="hover:text-[#8b82f6] transition-all">Preguntas Frecuentes</a>
            <a href="{{ route('contact') }}" class="hover:text-[#8b82f6] transition-all">Contacto</a>
        </nav>

        <!-- Acceder -->
        <div class="flex justify-end flex-1">
            <a href="/login" class="hover:text-[#8b82f6] transition-all">Acceder</a>
        </div>
    </div>
</header>
