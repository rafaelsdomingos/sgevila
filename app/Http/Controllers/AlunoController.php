<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateAlunoFormRequest;


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

    public function store(StoreUpdateAlunoFormRequest $request){
        $data = $request->all();
        //dd($data);
        $aluno = Aluno::create($data);
        return redirect()->route('alunos.index');
    }

    public function edit(Aluno $aluno){
        return view('alunos.edit', [
            'aluno'=>$aluno,
        ]);
    }

    public function update(StoreUpdateAlunoFormRequest $request){
        $data = $request->all();
        dd($data);
        //$aluno = Aluno::update($data);
        //return redirect()->route('alunos.index');
    }
}
