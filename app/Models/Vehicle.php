<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    // Si la tabla en la base de datos no sigue el plural de la convención (por ejemplo, `vehicles`):
    // protected $table = 'nombre_de_tu_tabla';

    // Si tu tabla tiene un campo de clave primaria diferente:
    // protected $primaryKey = 'id';

    // Si la tabla no tiene un campo `created_at` o `updated_at` (timestamps):
    // public $timestamps = false;

    // Si necesitas especificar los campos que pueden ser asignados masivamente:
    protected $fillable = [
        'brand', 'model', 'type', 'year', 'mileage', 'transmission','combustible','color', 'price', 'image',
    ];
}
