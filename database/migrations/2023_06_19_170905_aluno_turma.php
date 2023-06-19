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
        Schema::create('aluno_turma', function (Blueprint $table) {
            $table->foreignId('aluno_id')
                ->constrained()
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            
            $table->foreignId('turma_id')
                ->constrained()
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_turma');
    }
};
