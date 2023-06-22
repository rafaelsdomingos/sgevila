<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CoordenacaoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\EtapaController;
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
Route::middleware('auth')->group(function () {

    //Grupo de Rotas dos Alunos
    Route::prefix('alunos')->group(function(){
        Route::put('/{aluno}', [ AlunoController::class, 'update'])->name('alunos.update');
        Route::delete('/{aluno}', [ AlunoController::class, 'destroy'])->name('alunos.destroy');
        Route::get('/{aluno}/edit', [ AlunoController::class, 'edit'])->name('alunos.edit');
        Route::get('', [ AlunoController::class, 'index'])->name('alunos.index');
        Route::post('', [ AlunoController::class, 'store'])->name('alunos.store');
        Route::get('/create', [ AlunoController::class, 'create'])->name('alunos.create');
        Route::get('/{aluno}', [AlunoController::class, 'show'])->name('alunos.show');
    });

    //Grupo de Rotas dos Coordenações
    Route::prefix('coordenacoes')->group(function(){
        Route::put('/{coordenacao}', [ CoordenacaoController::class, 'update'])->name('coordenacoes.update');
        Route::delete('/{coordenacao}', [ CoordenacaoController::class, 'destroy'])->name('coordenacoes.destroy');
        Route::get('/{coordenacao}/edit', [ CoordenacaoController::class, 'edit'])->name('coordenacoes.edit');
        Route::get('', [ CoordenacaoController::class, 'index'])->name('coordenacoes.index');
        Route::post('', [ CoordenacaoController::class, 'store'])->name('coordenacoes.store');
        Route::get('/create', [CoordenacaoController::class, 'create'])->name('coordenacoes.create');
        Route::get('/{coordenacao}', [CoordenacaoController::class, 'show'])->name('coordenacoes.show');
    });

    //Grupo de Rotas dos Cursos
    Route::prefix('cursos')->group(function(){
        Route::get('', [ CursoController::class, 'index'])->name('cursos.index');
        Route::post('', [ CursoController::class, 'store'])->name('cursos.store');
        Route::get('/create', [CursoController::class, 'create'])->name('cursos.create');
        Route::get('/{curso}', [CursoController::class, 'show'])->name('cursos.show');
    });

    //Grupo de Rotas das Etapas
    Route::prefix('etapas')->group(function(){
        Route::get('', [ EtapaController::class, 'index'])->name('etapas.index');
        Route::post('', [ EtapaController::class, 'store'])->name('etapas.store');
        Route::get('/create', [EtapaController::class, 'create'])->name('etapas.create');
        Route::get('/{etapa}', [EtapaController::class, 'show'])->name('etapas.show');
    });

    
    //Grupo de Rotas das Turmas
    Route::prefix('turmas')->group(function(){
        Route::get('', [ TurmaController::class, 'index'])->name('turmas.index');
        Route::post('', [ TurmaController::class, 'store'])->name('turmas.store');
        Route::get('/create', [TurmaController::class, 'create'])->name('turmas.create');
        Route::get('/{turma}', [TurmaController::class, 'show'])->name('turmas.show');
    });


    //Grupo de Rotas dos Professores
    Route::prefix('professores')->group(function(){
        Route::get('', [ ProfessorController::class, 'index'])->name('professores.index');
        Route::post('', [ ProfessorController::class, 'store'])->name('professores.store');
        Route::get('/create', [ProfessorController::class, 'create'])->name('professores.create');
        Route::get('/{professor}', [ProfessorController::class, 'show'])->name('professores.show');
    });

});


//Rota inicial
//Route::get('/', function () {
//    return view('layouts.main');
//});


require __DIR__.'/auth.php';
