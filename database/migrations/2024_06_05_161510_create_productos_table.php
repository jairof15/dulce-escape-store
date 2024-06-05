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
            $table->string('descripcion', 75);
            $table->enum('categoria', ['Dulces','Salados','Especiales', 'Otros'])->default('dulces');
            $table->decimal('costo',8,2)->default(0);
            $table->decimal('ganancia',8,2)->default(0);
            $table->integer('stock')->default(0);
            $table->decimal('precio',8,2)->default(0);
            $table->timestamps();
            $table->softDeletes();
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
