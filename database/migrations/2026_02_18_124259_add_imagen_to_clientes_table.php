<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            // Añadimos la columna 'imagen' que puede estar vacía (nullable)
            // y la colocamos después del email para ser ordenados.
            $table->string('imagen')->nullable()->after('email');
        });
    }

    public function down(): void
    {
        Schema::table('clientes', function (Blueprint $table) {
            // Si deshacemos la migración, borramos la columna
            $table->dropColumn('imagen');
        });
    }
};
