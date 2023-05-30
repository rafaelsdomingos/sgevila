<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nacionalidade',
        'naturalidade',
        'sexo',
        'nascimento',
        'genero',
        'raca',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'regional',
        'fone1',
        'fone2',
        'email',
        'deficiencia',
        'tipo_deficiencia',
        'alergia',
        'tipo_alergia',
        'ecolaridade',
        'serie',
        'turno',
        'instituicao',
        'tipo_instituicao',
        'rg',
        'emissor',
        'uf_emissor',
        'cpf',
        'mae',
        'rgmae',
        'emissor_rg_mae',
        'uf_rg_mae',
        'pai',
        'rgpai',
        'emissor_rg_pai',
        'uf_rg_pai',
        'nome_contato1',
        'fone_contato1',
        'email_contato1',
        'nome_contato2',
        'fone_contato2',
        'email_contato2',
        'nome_contato3',
        'fone_contato3',
        'email_contato3',
        'transporte',
        'cia',
        'comp_endereco',
        'dec_matricula',
        'atestado',
        'renda',
        'certidao',
        'rg_responsavel',
        'foto',

    ];
}
