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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('nascimento');
            $table->enum('sexo', ['feminino', 'masculino']);
            $table->string('genero')->nullable();
            $table->string('raca')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('mae')->nullable();
            $table->string('pai')->nullable();
            $table->string('cpf')->unique()->nullable();
            $table->string('rg')->nullable();
            $table->string('emissor')->nullable();
            $table->string('ufemissor')->nullable();
            $table->string('cpfmae')->nullable();
            $table->string('cpfpai')->nullable();
            $table->string('rgmae')->nullable();
            $table->string('rgpai')->nullable();
            $table->string('cia')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('cep')->nullable();
            $table->enum('regional', ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII' ])->nullable();
            $table->string('fone1')->nullable();
            $table->string('fone2')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('foneresponsavel1')->nullable();
            $table->string('foneresponsavel2')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
