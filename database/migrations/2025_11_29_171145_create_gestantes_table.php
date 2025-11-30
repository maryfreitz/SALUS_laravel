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
        Schema::create('gestantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_gestante');
            $table->integer('idade_gestacao');
            $table->date('data_prevista_parto');
            $table->string('responsavel_acompanhamento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestantes');
    }
};
