<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_type'); // Tipo de vehículo (compacto, sedan, SUV, etc.)
            $table->decimal('price', 10, 2); // Precio de la garantía
            $table->integer('duration_months'); // Duración en meses
            $table->string('km_limit'); // Límite de kilómetros (o "Sin límite")
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('warranties');
    }
};
