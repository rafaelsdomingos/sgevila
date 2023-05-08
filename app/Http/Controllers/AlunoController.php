<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
  
    public function index(){
        $alunos = Aluno::all();
        return $alunos;
    }
    
    public function show(Aluno $aluno){
        return $aluno;
    }
}
