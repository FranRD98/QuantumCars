@include('admin-panel.header-admin', ['title' => 'Editar Usuario | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section class="bg-gray-100">
    <h1 class="text-4xl text-center">Editar Usuario</h1>
</section>

<section>

<div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-md">
    <h2 class="mb-6 text-2xl font-semibold text-gray-700">Editar Usuario</h2>

    <!-- Mensajes de error de validación -->
    @if ($errors->any())
        <div class="p-4 mb-4 text-red-700 bg-red-100 rounded-lg">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">

        <div>
            <label class="block mb-1 text-sm text-gray-600">Rol del usuario</label>
            <select required name="role" value="{{ $user->role }}" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                <option value="admin" {{ $user->rol == 'admin' ? 'selected' : '' }}>Administrador</option>
                <option value="cliente" {{ $user->rol == 'cliente' ? 'selected' : '' }}>Cliente</option>
            </select>
        </div>


    </div>
    <div class="flex justify-between">
            <!-- Botón editar -->
            <button type="submit" class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium">
                Editar Usuario
            </button>
            </form>

            <!-- Botón de eliminar reserva -->
            <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST" class="inline">
                @csrf @method('DELETE')
                <button type="submit" class="px-8 py-3 mt-8 text-lg font-medium text-white transition duration-500 bg-red-600 rounded-lg hover:bg-red-700">
                    Eliminar usuario
                </button>
            </form>
        </div>
</div>

</section>
</main>

</body>
</html>
