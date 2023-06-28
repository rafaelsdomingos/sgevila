<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'coordenacao_id',
        'modalidade',
        'descricao',
    ];

    public function coordenacao(){
        return $this->belongsTo(Coordenacao::class);
    }

    public function etapas(){
        return $this->hasMany(Etapa::class);
    }

}


