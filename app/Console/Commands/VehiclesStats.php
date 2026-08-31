<?php

namespace App\Console\Commands;

use App\Models\Vehicle;
use Illuminate\Console\Command;

class VehiclesStats extends Command
{
    protected $signature = 'vehicles:stats';

    protected $description = 'Muestra el nº de vehículos por tipo (total, publicados, disponibles)';

    public function handle(): int
    {
        $rows = Vehicle::selectRaw('type, COUNT(*) as total, SUM(published) as publicados, SUM(available) as disponibles')
            ->groupBy('type')
            ->orderBy('type')
            ->get();

        if ($rows->isEmpty()) {
            $this->warn('No hay vehículos en la base de datos.');

            return self::SUCCESS;
        }

        $this->table(
            ['Tipo', 'Total', 'Publicados', 'Disponibles'],
            $rows->map(fn ($r) => [$r->type, $r->total, (int) $r->publicados, (int) $r->disponibles])->all()
        );

        $this->line('La home cuenta la columna "Publicados" de cada tipo.');

        return self::SUCCESS;
    }
}
