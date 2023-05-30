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

            //Dados pessoais
            $table->id();
            $table->string('nome');
            $table->string('nacionalidade')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('sexo')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('genero')->nullable();
            $table->string('raca')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('cep')->nullable();
            $table->string('regional')->nullable();
            $table->string('fone1')->nullable();
            $table->string('fone2')->nullable();
            $table->string('email')->nullable();
            $table->boolean('deficiencia')->nullable();
            $table->string('tipo_deficiencia')->nullable();
            $table->boolean('alergia')->nullable();
            $table->string('tipo_alergia')->nullable();

            //Escolaridade
            $table->string('escolaridade')->nullable();
            $table->string('serie')->nullable();
            $table->string('turno')->nullable();
            $table->string('instituicao')->nullable();
            $table->string('tipo_instituicao')->nullable();

            //Documentação
            $table->string('rg')->nullable();
            $table->string('emissor')->nullable();
            $table->string('uf_emissor')->nullable();
            $table->string('cpf')->nullable();

            //filiação
            $table->string('mae')->nullable();
            $table->string('rgmae')->nullable();
            $table->string('emissor_rg_mae')->nullable();
            $table->string('uf_rg_mae')->nullable();
            $table->string('pai')->nullable();
            $table->string('rgpai')->nullable();
            $table->string('emissor_rg_pai')->nullable();
            $table->string('uf_rg_pai')->nullable();

            //Contatos
            $table->string('nome_contato1')->nullable();
            $table->string('fone_contato1')->nullable();
            $table->string('email_contato1')->nullable();

            $table->string('nome_contato2')->nullable();
            $table->string('fone_contato2')->nullable();
            $table->string('email_contato2')->nullable();

            $table->string('nome_contato3')->nullable();
            $table->string('fone_contato3')->nullable();
            $table->string('email_contato3')->nullable();

            //Transporte
            $table->boolean('transporte')->nullable();
            $table->string('cia')->nullable();

            //Documentação entregue
            $table->boolean('comp_endereco')->nullable();
            $table->boolean('dec_matricula')->nullable();
            $table->boolean('atestado')->nullable();
            $table->boolean('renda')->nullable();
            $table->boolean('certidao')->nullable();
            $table->boolean('rg_responsavel')->nullable();
            $table->boolean('foto')->nullable();

            
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
