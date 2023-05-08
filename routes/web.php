<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CoordenacaoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Grupo de Rotas dos Alunos
Route::prefix('alunos')->group(function(){
    Route::get('', [ AlunoController::class, 'index'])->name('alunos.index');
    Route::get('/{aluno}', [AlunoController::class, 'show'])->name('alunos.show');
});


//Grupo de Rotas dos Professores
Route::prefix('professores')->group(function(){
    Route::get('', function(){
        return 'rota padrão dos professores';
    })->name('professores');;
    Route::get('/{professor}', function($professor){
        return 'Professor '. $professor;
    })->name('professores.show');
});


//Grupo de Rotas dos Cursos
Route::prefix('cursos')->group(function(){
    Route::get('', function(){
        return 'rota padrão dos cursos';
    })->name('cursos');;
    Route::get('/{curso}', function($curso){
        return 'Curso '. $curso;
    })->name('cursos.show');
});


//Grupo de Rotas das Turmas


//Rota inicial
Route::get('/', function () {
    return view('layouts.default');
});
