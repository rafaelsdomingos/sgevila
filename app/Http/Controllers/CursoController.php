<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Curso;
use \App\Models\Coordenacao;
use App\Http\Requests\StoreUpdateCursoFormRequest;

class CursoController extends Controller
{
    //
    public function index(){
        $cursos = Curso::all();
        $cursos->load('coordenacao');
        return view('cursos.index', [
            'cursos'=>$cursos,
        ]);
    }

    public function show(Curso $curso){
        $curso->load('coordenacao');
        $curso->load('etapas');
        return view('cursos.show', [
            'curso'=>$curso,
        ]);
    }

    public function create(){
        $coordenacoes = Coordenacao::all();
        return view('cursos.create', [
            'coordenacoes'=>$coordenacoes,
        ]);
    }

    public function store(StoreUpdateCursoFormRequest $request){
        $data = $request->all();
        $curso = Curso::create($data);

        return redirect()->route('cursos.index');
    }


    public function edit(Curso $curso){
        $coordenacoes = Coordenacao::all();
        return view('cursos.edit', [
            'curso'=>$curso,
            'coordenacoes'=>$coordenacoes,
        ]);
    }

    public function update(StoreUpdateCursoFormRequest $request, $id){
        if (!$curso = Curso::find($id)){
            return redirect()->route('cursos.index');
        }
        $curso->update($request->all());
        return redirect()->route('cursos.index');
    }

    public function destroy($id){
        if (!$curso = Curso::find($id)){
            return redirect()->route('cursos.index');
        }
        $curso->delete();
        return redirect()->route('cursos.index');

    }
}

