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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curso_id')
                ->constrained()
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->string('nome');
            $table->date('inicio');
            $table->date('fim');
            $table->string('turno');
            $table->string('descricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
