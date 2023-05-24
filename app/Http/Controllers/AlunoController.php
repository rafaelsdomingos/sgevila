<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
  
    public function index(){
        $alunos = Aluno::all();
        return view('alunos.index', [
            'alunos'=>$alunos,
        ]);
    }
    
    public function show(Aluno $aluno){
        return view('alunos.show', [
            'aluno'=>$aluno,
        ]);
    }

    public function create(){
        return view('alunos.create');
    }

    public function store(Request $request){
        dd($request->all());
        //$data = $request->all();
        //$aluno = Aluno::create($data);

        //return redirect()->route('alunos.index');
    }
}
