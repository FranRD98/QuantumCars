<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // id de la reserva
            $table->unsignedBigInteger('user_id'); // Relación con el usuario (sin clave foránea)
            $table->unsignedBigInteger('vehicle_id'); // Relación con el vehículo (sin clave foránea)
            $table->date('start_date'); // Fecha de inicio de la reserva
            $table->date('end_date'); // Fecha de fin de la reserva
            $table->decimal('total_price', 10, 2); // Total precio de la reserva
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // Estado de la reserva
            $table->timestamps(); // Marca de tiempo de cuando se creó y actualizó la reserva
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
