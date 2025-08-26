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
        Schema::create('cat_proyectos', function (Blueprint $table) {
            $table->id('idProtecto');
            $table->string('nombreProyecto', 100);
            $table->string('descripcionproyecto', 255);
            $table->tinyInteger('eliminado')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_proyectos');
    }
};
