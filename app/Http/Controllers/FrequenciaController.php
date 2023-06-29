<?php

namespace App\Http\Controllers;

use App\Models\Frequencia;
use App\Models\Aluno;
use App\Models\Modulo;
use App\Models\Turma;
use Illuminate\Http\Request;

class FrequenciaController extends Controller
{
    
    public function criarFrequencias()
    {
        $id = 1;
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


    public function show($turma_id, $modulo_id){

        if ((!$turma = Turma::find($turma_id)) || (!$modulo = Modulo::find($modulo_id)) ){
            return redirect()->route('turmas.index');
        }

        $frequencias = Frequencia::where('turma_id', $turma_id)
            ->where('modulo_id', $modulo_id)
            ->whereBetween('data', ['2023-06-01', '2023-06-30'])
            ->orderBy('data')
            ->get();

        //return view('frequencias.show', compact('frequencias'));
        return $frequencias;
        
    }
    

    
    public function listarFrequencias()
    {
        //$dataInicio = $request->input('data_inicio');
        //$dataFim = $request->input('data_fim');
        $dataInicio = '2023-06-01';
        $dataFim = '2023-06-30';

        $frequencias = Frequencia::whereBetween('data', [$dataInicio, $dataFim])
            ->orderBy('aluno_id')
            ->get();

        /* Reorganizar os dados das frequências por aluno e data
        $dadosFrequencias = [];
        foreach ($frequencias as $frequencia) {
            //$dadosFrequencias[$frequencia->aluno][$frequencia->data] = $frequencia->presenca;
            $dadosFrequencias[$frequencia->aluno]['nome'] = $frequencia->aluno;
            $dadosFrequencias[$frequencia->aluno]['frequencias'][$frequencia->data] = $frequencia->presenca;
        }*/

        //return view('frequencias', compact('dadosFrequencias'));
        return $frequencias;
    }
    
}
