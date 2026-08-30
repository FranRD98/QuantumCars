<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminCreate extends Command
{
    protected $signature = 'admin:create
        {email : Correo del usuario}
        {password? : Contraseña en claro. Si se omite, se genera una aleatoria y se muestra}
        {--name=Admin : Nombre a usar si el usuario no existe}';

    protected $description = 'Crea un usuario admin, o pone rol admin + nueva contraseña si el email ya existe';

    public function handle(): int
    {
        $email = trim($this->argument('email'));

        $password = $this->argument('password');
        $generated = false;

        if (! $password) {
            $password = Str::password(16, letters: true, numbers: true, symbols: false);
            $generated = true;
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

        $this->newLine();
        $this->info(($existed ? 'Usuario actualizado' : 'Usuario creado').": {$email}  (rol: {$fresh->role})");

        if ($generated) {
            $this->newLine();
            $this->line('  ┌─────────────────────────────────────────────┐');
            $this->line('  │  CONTRASEÑA GENERADA (cópiala ahora):        │');
            $this->line('  │                                             │');
            $this->line('  │     '.str_pad($password, 40).'│');
            $this->line('  │                                             │');
            $this->line('  └─────────────────────────────────────────────┘');
            $this->comment('  Entra con ella y cámbiala luego en "Mi Perfil".');
        }

        $this->newLine();
        $this->line('  comprobación de login: '.($ok ? 'OK' : 'FALLA'));

        return $ok ? self::SUCCESS : self::FAILURE;
    }
}
