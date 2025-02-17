<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    // Mostrar todas las garantías
    public function index(){
        $users = User::all();
        return view('admin-panel.users.manage-users', compact('users'));
    }

    // Método para mostrar el formulario de creación de un nuevo vehículo
    public function create(){
        return view('admin-panel.users.user-create');
    }

    public function store(Request $request){
    
    // Continúa con la validación
    $validated = $request->validate([
        'name'     => 'required',
        'email' => 'required|email|unique:users,email', // Validación del email: que sea único en la tabla users
        'role'    => 'required',
        'password' => 'required|min:8|confirmed', // Validación de la contraseña
    ]);

    // Encriptar la contraseña antes de guardarla
    $validated['password'] = bcrypt($validated['password']);

    // Crear el usuario
    User::create($validated);

    return redirect()->route('manage-users')->with('success', 'Usuario creado correctamente.');
}

    // Mostrar el formulario para editar una garantía
    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin-panel.users.user-edit', compact('user'));
    }

    // Actualizar una garantía existente
    public function update(Request $request, $id){
        $validated = $request->validate([
            'role' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->update($validated);

        return redirect()->route('manage-users')->with('success', 'Usuario actualizado correctamente.');
    }

    // Eliminar una garantía
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('manage-users')->with('success', 'Usuario eliminado correctamente.');
    }
}

