<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Curso;

class CursoController extends Controller
{
    //
    public function index(){
        return Curso::all();
    }

    public function show(Curso $curso){
        $curso->load('coordenacao');
        return $curso;
    }
}

