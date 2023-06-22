<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Turma;

class TurmaController extends Controller
{

    public function index(){
        $turmas = Turma::all();
        return view('turmas.index', [
            'turmas'=>$turmas,
        ]);
    }

    public function show(Turma $turma){
        $turma->load('etapa');
        $turma->load('alunos');
        return view('turmas.show', [
            'turma'=>$turma,
        ]);
    }
}
