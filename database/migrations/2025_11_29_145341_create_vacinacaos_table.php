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
        Schema::create('vacinacaos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_paciente');
            $table->string('vacina');
            $table->date('data_aplicacao');
            $table->string('responsavel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacinacaos');
    }
};
