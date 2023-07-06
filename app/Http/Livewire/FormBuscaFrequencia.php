<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{Curso, Etapa, Turma, Modulo};

class FormBuscaFrequencia extends Component
{
    public $curso;
    public $etapa;
    public $modulo;
    public $turma;


    public $cursoId;
    public $etapaId;
    public $turmaId;
    public $moduloId;

    public $etapas = null;
    public $turmas = null;
    public $modulos = null;

    public function mount(Curso $curso, Etapa $etapa, Modulo $modulo, Turma $turma){
        $this->curso = $curso;
        $this->etapa = $etapa;
        $this->modulo = $modulo;
        $this->turma = $turma;
    }

    public function filtrarEtapaPeloCurso(){
        //$this->cursoId;
        $this->etapas = $this->curso->find($this->cursoId)->etapas;
    }

    public function filtrarTurmaPelaEtapa(){
        //$this->cursoId;
        $this->turmas = $this->etapa->find($this->etapaId)->turmas;
    }

    public function filtrarModuloPelaTurma(){
        $this->modulos = $this->turma->find($this->turmaId)->etapa->modulos;
    }
        

    public function render()
    {
        return view('livewire.form-busca-frequencia');
    }
}
