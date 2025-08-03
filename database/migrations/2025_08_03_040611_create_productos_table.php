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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Campo obligatorio según requisitos
            $table->decimal('precio', 10, 2); // Campo obligatorio según requisitos
            $table->text('descripcion')->nullable(); // Campo adicional útil
            $table->integer('stock')->default(0); // Campo útil para inventario
            
            // Relación con marcas (clave foránea)
            $table->foreignId('marca_id')
                  ->constrained('marcas')
                  ->onDelete('cascade'); // Si se elimina la marca, se eliminan sus productos
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
