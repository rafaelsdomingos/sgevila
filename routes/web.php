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


//Grupo de Rotas dos Professores
Route::prefix('professores')->group(function(){
    Route::get('', [ ProfessorController::class, 'index'])->name('professores.index');
    Route::post('', [ ProfessorController::class, 'store'])->name('professores.store');
    Route::get('/create', [ProfessorController::class, 'create'])->name('professores.create');
    Route::get('/{professor}', [ProfessorController::class, 'show'])->name('professores.show');
});


//Rota inicial
Route::get('/', function () {
    return view('layouts.main');
});
