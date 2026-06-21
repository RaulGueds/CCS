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
        Schema::table('cartas', function (Blueprint $table) {
        //nome, atributo(exclusivo: custo/triger/blocker/descrição), tipo(texto para filtro: monstro/feitiço/armadilha), expansão
            $table->string('custo')->after('nome');
            $table->text('cor')->after('custo');
            $table->string('tipo')->after('cor');
            $table->string('exclusividade')->after('tipo');
            $table->string('expansao')->after('exclusividade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cartas', function (Blueprint $table) {
            $table->dropColumn(['custo', 'cor', 'tipo', 'exclusividade', 'expansao']);
        });
    }
};
