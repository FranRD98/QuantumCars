<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminCreate extends Command
{
    protected $signature = 'admin:create
        {email : Correo del usuario}
        {password : Contraseña en claro (se cifra al guardar)}
        {--name=Admin : Nombre a usar si el usuario no existe}';

    protected $description = 'Crea un usuario admin, o pone rol admin + nueva contraseña si el email ya existe';

    public function handle(): int
    {
        $email = $this->argument('email');
        $password = $this->argument('password');

        $user = User::firstOrNew(['email' => $email]);
        $existed = $user->exists;

        if (! $existed) {
            $user->name = $this->option('name');
            $user->email_verified_at = now();
        }

        $user->password = Hash::make($password);
        $user->role = 'admin';
        $user->save();

        $this->info(($existed ? 'Usuario actualizado' : 'Usuario creado').": {$user->email} (rol: {$user->role})");

        return self::SUCCESS;
    }
}
