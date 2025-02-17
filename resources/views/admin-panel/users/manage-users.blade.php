@include('admin-panel.header-admin', ['title' => 'Gestionar Usuarios | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section>

        <div class="flex items-center justify-between mb-6">
            <h1 class="text-4xl">Gestionar Usuarios</h1>

            <!-- Botón de añadir nuevo usuario -->
            <div class="flex justify-end">
                <a class="px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium" href="{{ route('user.create') }}">Crear Usuario</a>
            </div>
        </div>

        <table class="min-w-full bg-white border-collapse table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-6 py-3 text-left text-gray-600">Nº Usuario</th>
                <th class="px-6 py-3 text-left text-gray-600">Nombre</th>
                <th class="px-6 py-3 text-left text-gray-600">Email</th>
                <th class="px-6 py-3 text-left text-gray-600">¿Correo verificado?</th>
                <th class="px-6 py-3 text-left text-gray-600">Rol</th>
                <th class="px-6 py-3 text-left text-gray-600">Creado desde</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)

                <tr class="{{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} *:px-6 *:py-4 *:text-gray-800 *:hover:bg-[#8b82f6] *:hover:text-white *:transition *:cursor-pointer" onclick="window.location.href=`{{ route('user.edit', ['id' => $user->id]) }}`">
                    
                    <td>#{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    
                    <td>
                        @if($user->email_verified_at === NULL)
                            <a class="px-3 py-2 text-red-500 bg-red-200 rounded-full">NO</a>
                        @else
                            <a class="px-3 py-2 text-green-500 bg-green-200 rounded-full">SÍ</a>
                        @endif
                    </td>

                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    </section>
</main>

</body>

</html>

