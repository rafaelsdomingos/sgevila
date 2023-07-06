<?php

namespace App\Http\Controllers;

use App\Models\Frequencia;
use App\Models\Aluno;
use App\Models\Modulo;
use App\Models\Turma;
use App\Models\Curso;
use Illuminate\Http\Request;

class FrequenciaController extends Controller
{

    public function index(){
        $turmas = Turma::all();
        
        $modulos = Modulo::all()
            ->where('id', '=', 0)
            ->sortBy('nome');
        
            return view('frequencias.index', [
                'modulos'=>$modulos,
                'turmas' => $turmas,
            ]);
    }

    
    public function criarFrequencias()
    {
        $id = 2;
        $ano = 2023; // Ano que você deseja criar as frequências

        $diasDaSemana = [
            'Monday',
            'Wednesday',
        ];

        if (!$turma = Turma::find($id)){
            return redirect()->route('turmas.index');
        }

        $turma->load('alunos');
        $alunos = $turma->alunos;

        $frequencias = [];

        $data = \Carbon\Carbon::create($ano, 1, 1); // Cria uma data com o primeiro dia do ano especificado

        while ($data->year == $ano) {
            if (in_array($data->englishDayOfWeek, $diasDaSemana)) {
                foreach ($alunos as $aluno) {
                    $frequencias[] = [
                        'aluno_id' => $aluno->id,
                        'turma_id' => $turma->id,
                        'modulo_id' => 1,
                        'data' => $data->toDateString(),
                        'presenca' => false, // Defina como true para marcar presença
                    ];
                }
            }
            $data->addDay();
        }

        Frequencia::insert($frequencias);

        return 'Frequências criadas com sucesso!';
    }


    public function show($turma_id){

        $dataInicio = '2023-01-01';
        $dataFim = '2023-01-30';
        
        if (!$turma = Turma::find($turma_id)){
            return redirect()->route('turmas.index');
        }

        $turma->load('alunos');
        $alunos = $turma->alunos->sortBy('nome');


        $frequencias = Frequencia::whereBetween('data', [$dataInicio, $dataFim])
            ->orderBy('data')
            ->get();

        $datas = Frequencia::select('data')
            ->whereBetween('data', [$dataInicio, $dataFim])
            ->distinct()
            ->get();

        //Reorganizar os dados das frequências por aluno e data
        $dadosFrequencias = [];
        foreach ($frequencias as $frequencia) {
            $dadosFrequencias[$frequencia->aluno_id][$frequencia->data] = $frequencia->presenca;
        }

        return view('frequencias', compact('dadosFrequencias', 'datas', 'alunos'));
        //return $frequencias;
        
    }
    

    
    public function listarFrequencias(Request $request)
    {
        //dd($request->all());
        //$dataInicio = $request->input('data_inicio');
        //$dataFim = $request->input('data_fim');
        $mes = $request->mes;
        $curso_id = $request->curso_id;
        $turma_id = $request->turma_id;
        $modulo_id = $request->modulo_id;

        //Seleção do Mês
        if($mes == 1){
            $dataInicio = '2023-01-01';
            $dataFim = '2023-01-31';
        }elseif($mes == 2){
            $dataInicio = '2023-02-01';
            $dataFim = '2023-02-29';
        }else{
            $dataInicio = '2023-03-01';
            $dataFim = '2023-03-31';
        }
        
        

        if (!$turma = Turma::find($turma_id)){
            return redirect()->route('frequencias.index');
        }

        if (!$curso = Curso::find($curso_id)){
            return redirect()->route('frequencias.index');
        }

        $turma->load('alunos');
        $alunos = $turma->alunos->sortBy('nome');

        

        $frequencias = Frequencia::whereBetween('data', [$dataInicio, $dataFim])
            ->where('turma_id', $turma_id )
            ->where('modulo_id', $modulo_id )
            ->orderBy('data')
            ->get();

        $datas = Frequencia::select('data')
            ->whereBetween('data', [$dataInicio, $dataFim])
            ->distinct()
            ->get();

        //Reorganizar os dados das frequências por aluno e data
        $dadosFrequencias = [];
        foreach ($frequencias as $frequencia) {
            $dadosFrequencias[$frequencia->aluno_id][$frequencia->data] = $frequencia->presenca;
            //$dadosFrequencias[$frequencia->aluno]['nome'] = $frequencia->aluno;
            //$dadosFrequencias[$frequencia->aluno]['frequencias'][$frequencia->data] = $frequencia->presenca;
        }

        
        return view('frequencias', compact('dadosFrequencias', 'datas', 'alunos', 'turma', 'curso'));
        //return $frequencias;
    }
    
}
