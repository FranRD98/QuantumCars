@include('admin-panel.header-admin', ['title' => 'Nuevo Usuario | QuantumCars Rent'])

<!-- Contenido principal -->
<main class="ml-48">
<section class="bg-gray-100">
    <h1 class="text-4xl text-center">Añadir usuario</h1>
</section>

<section>

<div class="max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-md">
    <h2 class="mb-6 text-2xl font-semibold text-gray-700">Agregar Usuario</h2>

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

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block mb-1 text-sm text-gray-600">Nombre*</label>
            <input required type="text" name="name" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Email*</label>
            <input required type="email" name="email" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Rol*</label>
            <select required name="role" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
                <option value="admin">Administrador</option>
                <option value="cliente">Cliente</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Contraseña*</label>
            <input required type="password" name="password" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>

        <div>
            <label class="block mb-1 text-sm text-gray-600">Confirmar Contraseña*</label>
            <input required type="password" name="password_confirmation" class="w-full p-2 border rounded-lg focus:ring-[#8b82f6] focus:border-[#8b82f6]">
        </div>
    </div>

    <button type="submit" class="mt-8 px-8 py-3 bg-gray-100 text-[#8b82f6] hover:bg-[#8b82f6] hover:text-white rounded-lg transition duration-500 text-lg font-medium">
        Guardar
    </button>
</form>

</div>

</section>
</main>
</body>

</html>

