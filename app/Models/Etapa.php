<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etapa extends Model
{
    use HasFactory;

    protected $with = ['curso', 'modulos', 'turmas'];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function modulos(){
        return $this->hasMany(Modulo::class);
    }

    public function turmas(){
        return $this->hasMany(Turma::class);
    }
}
