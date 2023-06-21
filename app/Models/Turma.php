<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    public function curso(){
        return $this->belongsTo(Curso::class);
    }


    public function alunos(){
        return $this->belongsToMany(Aluno::class);
    }

    public function modulos(){
        return $this->hasMany(Modulo::class);
    }



}
