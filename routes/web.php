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
    Route::post('', [ AlunoController::class, 'store'])->name('alunos.store');
    Route::get('/create', [ AlunoController::class, 'create'])->name('alunos.create');
    Route::get('/{aluno}', [AlunoController::class, 'show'])->name('aluno.show');
    
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


//Grupo de Rotas dos Coordenações
Route::prefix('coordenacoes')->group(function(){
    Route::get('', [ CursoController::class, 'index'])->name('coordenacoes.index');
    Route::post('', [ CursoController::class, 'store'])->name('coordenacao.store');
    Route::get('/{coordenacao}', [CursoController::class, 'show'])->name('coordenacao.show');
});


//Grupo de Rotas dos Cursos
Route::prefix('cursos')->group(function(){
    Route::get('', [ CursoController::class, 'index'])->name('cursos.index');
    Route::get('/{curso}', [CursoController::class, 'show'])->name('curso.show');
});

//Grupo de Rotas das Turmas

//Rota inicial
Route::get('/', function () {
    return view('layouts.main');
});

//Rota teste
Route::get('novoaluno', [AlunoController::class, 'new'])->name('aluno.new');
