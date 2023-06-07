<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Curso;

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
        return $curso;
    }
}

