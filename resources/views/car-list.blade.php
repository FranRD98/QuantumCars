@include('layouts.header', ['title' => 'Lista de vehículos | QuantumCars Rent'])

<!-- Buscador de vehículos -->
<section class="px-8 py-16 bg-gray-100">

@if($vehicles->isEmpty())

@else

<h1 class="text-2xl text-center">Hemos encontrado <span class="text-[#8b82f6]">{{ $vehicles->count() }}</span> vehículos</h1>
@endif

    <!-- Buscador -->
    <div class="flex w-full items-center justify-center py-8 bg-white rounded-lg shadow-[0px_10px_20px_#8b82f64d] gap-2">

        <!-- Filtros Marca -->
        <div class="flex flex-row gap-2 px-4 py-2 border rounded-full shadow-sm bg-white text-gray-700 focus:ring-[#8b82f6] focus:outline-none">
            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.448 1.75C5.54954 1.74997 4.8003 1.74995 4.20552 1.82991C3.57773 1.91432 3.01093 2.09999 2.55546 2.55546C2.09999 3.01093 1.91432 3.57773 1.82991 4.20552C1.74995 4.8003 1.74997 5.54951 1.75 6.44798V6.552C1.74997 7.45047 1.74995 8.19971 1.82991 8.79448C1.91432 9.42228 2.09999 9.98908 2.55546 10.4445C3.01093 10.9 3.57773 11.0857 4.20552 11.1701C4.8003 11.2501 5.54951 11.25 6.44798 11.25H6.552C7.45047 11.25 8.19971 11.2501 8.79448 11.1701C9.42228 11.0857 9.98908 10.9 10.4445 10.4445C10.9 9.98908 11.0857 9.42228 11.1701 8.79448C11.2501 8.19971 11.25 7.4505 11.25 6.55203V6.44801C11.25 5.54954 11.2501 4.8003 11.1701 4.20552C11.0857 3.57773 10.9 3.01093 10.4445 2.55546C9.98908 2.09999 9.42228 1.91432 8.79448 1.82991C8.19971 1.74995 7.4505 1.74997 6.55203 1.75H6.448ZM3.61612 3.61612C3.74644 3.4858 3.94393 3.37858 4.4054 3.31654C4.88843 3.2516 5.53599 3.25 6.5 3.25C7.46401 3.25 8.11157 3.2516 8.59461 3.31654C9.05607 3.37858 9.25357 3.4858 9.38389 3.61612C9.5142 3.74644 9.62143 3.94393 9.68347 4.4054C9.74841 4.88843 9.75 5.53599 9.75 6.5C9.75 7.46401 9.74841 8.11157 9.68347 8.59461C9.62143 9.05607 9.5142 9.25357 9.38389 9.38389C9.25357 9.5142 9.05607 9.62143 8.59461 9.68347C8.11157 9.74841 7.46401 9.75 6.5 9.75C5.53599 9.75 4.88843 9.74841 4.4054 9.68347C3.94393 9.62143 3.74644 9.5142 3.61612 9.38389C3.4858 9.25357 3.37858 9.05607 3.31654 8.59461C3.2516 8.11157 3.25 7.46401 3.25 6.5C3.25 5.53599 3.2516 4.88843 3.31654 4.4054C3.37858 3.94393 3.4858 3.74644 3.61612 3.61612Z" fill="#b4b7bc"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.448 12.75C16.5495 12.75 15.8003 12.7499 15.2055 12.8299C14.5777 12.9143 14.0109 13.1 13.5555 13.5555C13.1 14.0109 12.9143 14.5777 12.8299 15.2055C12.7499 15.8003 12.75 16.5495 12.75 17.448V17.552C12.75 18.4505 12.7499 19.1997 12.8299 19.7945C12.9143 20.4223 13.1 20.9891 13.5555 21.4445C14.0109 21.9 14.5777 22.0857 15.2055 22.1701C15.8003 22.2501 16.5495 22.25 17.4479 22.25H17.552C18.4504 22.25 19.1997 22.2501 19.7945 22.1701C20.4223 22.0857 20.9891 21.9 21.4445 21.4445C21.9 20.9891 22.0857 20.4223 22.1701 19.7945C22.2501 19.1997 22.25 18.4505 22.25 17.5521V17.448C22.25 16.5496 22.2501 15.8003 22.1701 15.2055C22.0857 14.5777 21.9 14.0109 21.4445 13.5555C20.9891 13.1 20.4223 12.9143 19.7945 12.8299C19.1997 12.7499 18.4505 12.75 17.552 12.75H17.448ZM14.6161 14.6161C14.7464 14.4858 14.9439 14.3786 15.4054 14.3165C15.8884 14.2516 16.536 14.25 17.5 14.25C18.464 14.25 19.1116 14.2516 19.5946 14.3165C20.0561 14.3786 20.2536 14.4858 20.3839 14.6161C20.5142 14.7464 20.6214 14.9439 20.6835 15.4054C20.7484 15.8884 20.75 16.536 20.75 17.5C20.75 18.464 20.7484 19.1116 20.6835 19.5946C20.6214 20.0561 20.5142 20.2536 20.3839 20.3839C20.2536 20.5142 20.0561 20.6214 19.5946 20.6835C19.1116 20.7484 18.464 20.75 17.5 20.75C16.536 20.75 15.8884 20.7484 15.4054 20.6835C14.9439 20.6214 14.7464 20.5142 14.6161 20.3839C14.4858 20.2536 14.3786 20.0561 14.3165 19.5946C14.2516 19.1116 14.25 18.464 14.25 17.5C14.25 16.536 14.2516 15.8884 14.3165 15.4054C14.3786 14.9439 14.4858 14.7464 14.6161 14.6161Z" fill="#b4b7bc"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.448 12.75H6.552C7.45048 12.75 8.1997 12.7499 8.79448 12.8299C9.42228 12.9143 9.98908 13.1 10.4445 13.5555C10.9 14.0109 11.0857 14.5777 11.1701 15.2055C11.2501 15.8003 11.25 16.5495 11.25 17.448V17.552C11.25 18.4505 11.2501 19.1997 11.1701 19.7945C11.0857 20.4223 10.9 20.9891 10.4445 21.4445C9.98908 21.9 9.42228 22.0857 8.79448 22.1701C8.19971 22.2501 7.45051 22.25 6.55206 22.25H6.44801C5.54955 22.25 4.80029 22.2501 4.20552 22.1701C3.57773 22.0857 3.01093 21.9 2.55546 21.4445C2.09999 20.9891 1.91432 20.4223 1.82991 19.7945C1.74995 19.1997 1.74997 18.4505 1.75 17.552V17.448C1.74997 16.5495 1.74995 15.8003 1.82991 15.2055C1.91432 14.5777 2.09999 14.0109 2.55546 13.5555C3.01093 13.1 3.57773 12.9143 4.20552 12.8299C4.8003 12.7499 5.54952 12.75 6.448 12.75ZM4.4054 14.3165C3.94393 14.3786 3.74644 14.4858 3.61612 14.6161C3.4858 14.7464 3.37858 14.9439 3.31654 15.4054C3.2516 15.8884 3.25 16.536 3.25 17.5C3.25 18.464 3.2516 19.1116 3.31654 19.5946C3.37858 20.0561 3.4858 20.2536 3.61612 20.3839C3.74644 20.5142 3.94393 20.6214 4.4054 20.6835C4.88843 20.7484 5.53599 20.75 6.5 20.75C7.46401 20.75 8.11157 20.7484 8.59461 20.6835C9.05607 20.6214 9.25357 20.5142 9.38389 20.3839C9.5142 20.2536 9.62143 20.0561 9.68347 19.5946C9.74841 19.1116 9.75 18.464 9.75 17.5C9.75 16.536 9.74841 15.8884 9.68347 15.4054C9.62143 14.9439 9.5142 14.7464 9.38389 14.6161C9.25357 14.4858 9.05607 14.3786 8.59461 14.3165C8.11157 14.2516 7.46401 14.25 6.5 14.25C5.53599 14.25 4.88843 14.2516 4.4054 14.3165Z" fill="#b4b7bc"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.448 1.75C16.5495 1.74997 15.8003 1.74995 15.2055 1.82991C14.5777 1.91432 14.0109 2.09999 13.5555 2.55546C13.1 3.01093 12.9143 3.57773 12.8299 4.20552C12.7499 4.8003 12.75 5.54952 12.75 6.448V6.552C12.75 7.45048 12.7499 8.1997 12.8299 8.79448C12.9143 9.42228 13.1 9.98908 13.5555 10.4445C14.0109 10.9 14.5777 11.0857 15.2055 11.1701C15.8003 11.2501 16.5495 11.25 17.448 11.25H17.552C18.4505 11.25 19.1997 11.2501 19.7945 11.1701C20.4223 11.0857 20.9891 10.9 21.4445 10.4445C21.9 9.98908 22.0857 9.42228 22.1701 8.79448C22.2501 8.19971 22.25 7.4505 22.25 6.55203V6.44801C22.25 5.54954 22.2501 4.8003 22.1701 4.20552C22.0857 3.57773 21.9 3.01093 21.4445 2.55546C20.9891 2.09999 20.4223 1.91432 19.7945 1.82991C19.1997 1.74995 18.4505 1.74997 17.552 1.75H17.448ZM14.6161 3.61612C14.7464 3.4858 14.9439 3.37858 15.4054 3.31654C15.8884 3.2516 16.536 3.25 17.5 3.25C18.464 3.25 19.1116 3.2516 19.5946 3.31654C20.0561 3.37858 20.2536 3.4858 20.3839 3.61612C20.5142 3.74644 20.6214 3.94393 20.6835 4.4054C20.7484 4.88843 20.75 5.53599 20.75 6.5C20.75 7.46401 20.7484 8.11157 20.6835 8.59461C20.6214 9.05607 20.5142 9.25357 20.3839 9.38389C20.2536 9.5142 20.0561 9.62143 19.5946 9.68347C19.1116 9.74841 18.464 9.75 17.5 9.75C16.536 9.75 15.8884 9.74841 15.4054 9.68347C14.9439 9.62143 14.7464 9.5142 14.6161 9.38389C14.4858 9.25357 14.3786 9.05607 14.3165 8.59461C14.2516 8.11157 14.25 7.46401 14.25 6.5C14.25 5.53599 14.2516 4.88843 14.3165 4.4054C14.3786 3.94393 14.4858 3.74644 14.6161 3.61612Z" fill="#b4b7bc"/>
</svg>
            <select id="car-brand" class="" onchange="redirectToBrandPage()">
                <option value="" disabled selected>Marca</option>
                <option value="audi">Audi</option>
                <option value="bmw">BMW</option>
                <option value="mercedes">Mercedes-Benz</option>
                <option value="porsche">Porsche</option>
                <option value="tesla">Tesla</option>
                <option value="ferrari">Ferrari</option>
                <option value="lamborghini">Lamborghini</option>
                <option value="mclaren">McLaren</option>
                <option value="rolls-royce">Rolls-Royce</option>
            </select>

            <script>
                function redirectToBrandPage() {
                    const brand = document.getElementById('car-brand').value;
                    if (brand) {
                        window.location.href = '/vehicles/brand/${brand}';
                    }
                }
            </script>
        </div>
        <div>

        <!-- Filtros Tipo -->
        <div class="flex flex-row gap-2 px-4 py-2 border rounded-full shadow-sm bg-white text-gray-700 focus:ring-[#8b82f6] focus:outline-none">
        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3 8L5.72187 10.2682C5.90158 10.418 6.12811 10.5 6.36205 10.5H17.6379C17.8719 10.5 18.0984 10.418 18.2781 10.2682L21 8M6.5 14H6.51M17.5 14H17.51M8.16065 4.5H15.8394C16.5571 4.5 17.2198 4.88457 17.5758 5.50772L20.473 10.5777C20.8183 11.1821 21 11.8661 21 12.5623V18.5C21 19.0523 20.5523 19.5 20 19.5H19C18.4477 19.5 18 19.0523 18 18.5V17.5H6V18.5C6 19.0523 5.55228 19.5 5 19.5H4C3.44772 19.5 3 19.0523 3 18.5V12.5623C3 11.8661 3.18166 11.1821 3.52703 10.5777L6.42416 5.50772C6.78024 4.88457 7.44293 4.5 8.16065 4.5ZM7 14C7 14.2761 6.77614 14.5 6.5 14.5C6.22386 14.5 6 14.2761 6 14C6 13.7239 6.22386 13.5 6.5 13.5C6.77614 13.5 7 13.7239 7 14ZM18 14C18 14.2761 17.7761 14.5 17.5 14.5C17.2239 14.5 17 14.2761 17 14C17 13.7239 17.2239 13.5 17.5 13.5C17.7761 13.5 18 13.7239 18 14Z" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <select id="car-type" class="" onchange="redirectToBrandPage()">
                <option value="" disabled selected>Tipo</option>
                <option value="compacto">Compacto</option>
                <option value="suv">SUV</option>
                <option value="sedan">Sedán</option>
                <option value="deportivo">Deportivo</option>
                <option value="furgoneta">Furgoneta</option>
                <option value="electrico">Electrico</option>
            </select>



    </div>
        </div>

            <!-- Filtros Antiguedad -->
            <div class="flex flex-row gap-2 px-4 py-2 border rounded-full shadow-sm bg-white text-gray-700 focus:ring-[#8b82f6] focus:outline-none">
            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 7V12H15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <select id="car-year" onchange="redirectToBrandPage()">
                <option value="" disabled selected>Año</option>
                <option value="compacto">Compacto</option>
            </select>
    </div>

                <!-- Filtros Kilometraje -->
                <div class="flex flex-row gap-2 px-4 py-2 border rounded-full shadow-sm bg-white text-gray-700 focus:ring-[#8b82f6] focus:outline-none">
                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="12" cy="12" r="2" stroke="#b4b7bc" stroke-width="1.5"/>
<path d="M6 12L10 12" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14 12L18 12" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M9 17.1963L11 13.7322" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M13 10.2681L15 6.80396" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15 17.1963L13 13.7322" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M11 10.2681L9 6.80396" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15 17.1973C14.1175 17.7078 13.0929 18 12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 13.0929 17.7078 14.1175 17.1973 15" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
</svg>
            <select id="car-km" onchange="redirectToBrandPage()">
                <option value="" disabled selected>Kilometraje</option>
                <option value="compacto">Muchos</option>
            </select>
    </div>

                    <!-- Filtros Combustible -->
                    <div class="flex flex-row gap-2 px-4 py-2 border rounded-full shadow-sm bg-white text-gray-700 focus:ring-[#8b82f6] focus:outline-none">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16 22V8C16 5.17157 16 3.75736 15.1213 2.87868C14.2426 2 12.8284 2 10 2H9C6.17157 2 4.75736 2 3.87868 2.87868C3 3.75736 3 5.17157 3 8V22" stroke="#b4b7bc" stroke-width="1.5"/>
<path d="M11 6H8C7.05719 6 6.58579 6 6.29289 6.29289C6 6.58579 6 7.05719 6 8C6 8.94281 6 9.41421 6.29289 9.70711C6.58579 10 7.05719 10 8 10H11C11.9428 10 12.4142 10 12.7071 9.70711C13 9.41421 13 8.94281 13 8C13 7.05719 13 6.58579 12.7071 6.29289C12.4142 6 11.9428 6 11 6Z" stroke="#b4b7bc" stroke-width="1.5"/>
<path d="M7 17H12" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17 22H2" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M19.5 4L20.7331 4.98647C20.8709 5.09673 20.9398 5.15186 21.0025 5.20805C21.5937 5.73807 21.9508 6.48086 21.9953 7.27364C22 7.35769 22 7.44594 22 7.62244V18.5C22 19.3284 21.3284 20 20.5 20C19.6716 20 19 19.3284 19 18.5V18.4286C19 17.6396 18.3604 17 17.5714 17H16" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
<path d="M22 8H20.5C19.6716 8 19 8.67157 19 9.5V11.9189C19 12.5645 19.4131 13.1377 20.0257 13.3419L22 14" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round"/>
</svg>
            <select id="car-petrol" onchange="redirectToBrandPage()">
                <option value="" disabled selected>Combustible</option>
                <option value="compacto">Agua</option>
            </select>
    </div>

                    <!-- Filtros Cambio -->
                    <div class="flex flex-row gap-2 px-4 py-2 border rounded-full shadow-sm bg-white text-gray-700 focus:ring-[#8b82f6] focus:outline-none">
                    <svg fill="#b4b7bc" height="24px" width="24px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
<g>
	<g>
		<path d="M448,387.654V256V124.346c24.858-8.784,42.667-32.474,42.667-60.346c0-35.355-28.645-64-64-64c-35.355,0-64,28.645-64,64
			c0,27.872,17.808,51.562,42.667,60.346v110.321h-128V124.346C302.192,115.562,320,91.872,320,64c0-35.355-28.645-64-64-64
			s-64,28.645-64,64c0,27.872,17.808,51.562,42.667,60.346v110.321h-128V124.346c24.858-8.784,42.667-32.474,42.667-60.346
			c0-35.355-28.645-64-64-64s-64,28.645-64,64c0,27.872,17.808,51.562,42.667,60.346V256c0,11.782,9.551,21.333,21.333,21.333
			h149.333v110.321C209.808,396.438,192,420.128,192,448c0,35.355,28.645,64,64,64s64-28.645,64-64
			c0-27.872-17.808-51.562-42.667-60.346V277.333h128v110.321c-24.858,8.784-42.667,32.474-42.667,60.346c0,35.355,28.645,64,64,64
			c35.355,0,64-28.645,64-64C490.667,420.128,472.858,396.438,448,387.654z M426.667,42.667C438.458,42.667,448,52.209,448,64
			s-9.542,21.333-21.333,21.333S405.333,75.791,405.333,64S414.875,42.667,426.667,42.667z M256,42.667
			c11.791,0,21.333,9.542,21.333,21.333S267.791,85.333,256,85.333c-11.791,0-21.333-9.542-21.333-21.333S244.209,42.667,256,42.667
			z M85.333,42.667c11.791,0,21.333,9.542,21.333,21.333s-9.542,21.333-21.333,21.333S64,75.791,64,64S73.542,42.667,85.333,42.667z
			 M256,469.333c-11.791,0-21.333-9.542-21.333-21.333s9.542-21.333,21.333-21.333c11.791,0,21.333,9.542,21.333,21.333
			S267.791,469.333,256,469.333z M426.667,469.333c-11.791,0-21.333-9.542-21.333-21.333s9.542-21.333,21.333-21.333
			S448,436.209,448,448S438.458,469.333,426.667,469.333z"/>
	</g>
</g>
</svg>
            <select id="car-km" onchange="redirectToBrandPage()">
                <option value="" disabled selected>Cambio</option>
                <option value="compacto">DSG</option>
            </select>
    </div>

                    <!-- Filtros Dinero -->
                    <div class="flex flex-row gap-2 px-4 py-2 border rounded-full shadow-sm bg-white text-gray-700 focus:ring-[#8b82f6] focus:outline-none">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19 7.11111C17.775 5.21864 15.8556 4 13.6979 4C9.99875 4 7 7.58172 7 12C7 16.4183 9.99875 20 13.6979 20C15.8556 20 17.775 18.7814 19 16.8889M5 10H14M5 14H14" stroke="#b4b7bc" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
            <select id="car-km" onchange="redirectToBrandPage()">
                <option value="" disabled selected>Dinero</option>
                <option value="compacto">Mucho money</option>
            </select>
    </div>











    </div>


            </section>

<!-- Listado de vehículos -->
<section class="py-12">

    <!-- Listar vehículos -->
    @if($vehicles->isEmpty())
        <div class="flex flex-col items-center justify-center gap-y-2">
            <img src="car_icon.svg">
            <h1 class="text-3xl text-center text-[#050f23]">No se han encontrado vehículos</h1>
            <h1 class="text-xl text-center text-[#696F7A]">Por favor, cambia los valores de búsqueda</h1>

        </div>

    @else
    <div class="grid grid-cols-1 gap-8 px-6 mx-auto max-w-7xl sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
        

        @foreach ($vehicles as $vehicle)
        
            <a href="{{ route('vehicle.show', ['id' => $vehicle->id]) }}" class="overflow-hidden bg-white rounded-lg shadow-lg group">
                <div class="relative">
                    <img class="object-cover w-full h-64 transition-all duration-300 ease-in-out group-hover:scale-105" 
                    src="{{ asset('storage/' . $vehicle->image) }}" alt="{{ $vehicle->brand }} {{ $vehicle->model }}">
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $vehicle->year }} {{ $vehicle->brand }} {{ $vehicle->model }}</h2>
                    <div class="flex justify-between mt-2 text-gray-600">
                        <p class="text-lg font-semibold">{{ number_format($vehicle->price, 0, ',', '.') }} €</p>
                        <p class="text-lg font-semibold">40.000km</p>
                    </div>
                </div>
            </a>

        @endforeach
    @endif

    </div>
</section>

@include('layouts.footer')