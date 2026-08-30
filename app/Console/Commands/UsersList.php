<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UsersList extends Command
{
    protected $signature = 'users:list';

    protected $description = 'Lista todos los usuarios (id, nombre, email, rol)';

    public function handle(): int
    {
        $users = User::orderBy('id')->get(['id', 'name', 'email', 'role']);

        if ($users->isEmpty()) {
            $this->warn('No hay usuarios en la base de datos.');

            return self::SUCCESS;
        }

        $this->table(
            ['ID', 'Nombre', 'Email', 'Rol'],
            $users->map(fn ($u) => [$u->id, $u->name, $u->email, $u->role])->all()
        );

        return self::SUCCESS;
    }
}
