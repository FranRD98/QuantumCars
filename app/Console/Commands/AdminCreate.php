<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminCreate extends Command
{
    protected $signature = 'admin:create
        {email : Correo del usuario}
        {password? : Contraseña en claro (si se omite se pide de forma interactiva)}
        {--name=Admin : Nombre a usar si el usuario no existe}';

    protected $description = 'Crea un usuario admin, o pone rol admin + nueva contraseña si el email ya existe';

    public function handle(): int
    {
        $email = trim($this->argument('email'));
        $password = $this->argument('password')
            ?: $this->secret('Contraseña para '.$email);

        if (! $password) {
            $this->error('Contraseña vacía. Abortado.');

            return self::FAILURE;
        }

        $user = User::firstOrNew(['email' => $email]);
        $existed = $user->exists;

        if (! $existed) {
            $user->name = $this->option('name');
            $user->email_verified_at = now();
        }

        $user->password = Hash::make($password);
        $user->role = 'admin';
        $user->save();

        // Auto-verificación: relee de la BD y comprueba el hash
        $fresh = User::where('email', $email)->first();
        $ok = $fresh && $fresh->role === 'admin' && Hash::check($password, $fresh->password);

        $this->info(($existed ? 'Usuario actualizado' : 'Usuario creado').": {$email}");
        $this->line("  rol: {$fresh->role}");
        $this->line('  longitud de la contraseña recibida: '.strlen($password).' caracteres');
        $this->line('  comprobación de login: '.($ok ? 'OK ✅' : 'FALLA ❌'));

        if (! $ok) {
            $this->warn('Algo no cuadra. Revisa el entrecomillado de la contraseña en la shell.');

            return self::FAILURE;
        }

        return self::SUCCESS;
    }
}
