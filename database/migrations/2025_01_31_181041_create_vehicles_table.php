<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50); 
            $table->string('model', 50);
            $table->year('year');
            $table->string('color', 30);
            $table->enum('fuel', ['Gasolina', 'Diésel', 'Eléctrico', 'Híbrido']);
            $table->integer('mileage')->unsigned();
            $table->enum('transmission', ['Manual', 'Automático']);
            $table->decimal('price', 10, 2);
            $table->enum('type', ['Compacto', 'SUV', 'Sedán', 'Deportivo', 'Furgoneta', 'Electrico', 'Otro']);
            $table->string('image_1')->nullable(); // URL de la imagen opcional
            $table->string('image_2')->nullable(); // URL de la imagen opcional
            $table->string('image_3')->nullable(); // URL de la imagen opcional
            $table->string('image_4')->nullable(); // URL de la imagen opcional
            $table->string('image_5')->nullable(); // URL de la imagen opcional
            $table->string('image_6')->nullable(); // URL de la imagen opcional
            $table->text('description');
            $table->integer('fee');
            $table->string('typeWarranty');
            $table->boolean('published')->default(0);
            $table->boolean('available')->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
