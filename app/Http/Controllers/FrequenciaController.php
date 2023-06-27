<?php

namespace App\Http\Controllers;

use App\Models\Frequencia;
use Illuminate\Http\Request;

class FrequenciaController extends Controller
{
    public function criarFrequencias()
    {
        $ano = 2023; // Ano que você deseja criar as frequências

        $diasDaSemana = [
            'Monday',
            'Wednesday',
        ];

        $alunos = [
            'João',
            'Maria',
            'Pedro',
        ];

        $frequencias = [];

        $data = \Carbon\Carbon::create($ano, 1, 1); // Cria uma data com o primeiro dia do ano especificado

        while ($data->year == $ano) {
            if (in_array($data->englishDayOfWeek, $diasDaSemana)) {
                foreach ($alunos as $aluno) {
                    $frequencias[] = [
                        'data' => $data->toDateString(),
                        'aluno' => $aluno,
                        'presenca' => false, // Defina como true para marcar presença
                        'media' => null, // Valor inicial da média
                    ];
                }
            }
            $data->addDay();
        }

        Frequencia::insert($frequencias);

        return 'Frequências criadas com sucesso!';
    }

    public function listarFrequencias()
    {
        //$dataInicio = $request->input('data_inicio');
        //$dataFim = $request->input('data_fim');
        $dataInicio = '2023-06-01';
        $dataFim = '2023-06-30';

        $frequencias = Frequencia::whereBetween('data', [$dataInicio, $dataFim])
            ->orderBy('aluno')
            ->get();

        // Reorganizar os dados das frequências por aluno e data
        $dadosFrequencias = [];
        foreach ($frequencias as $frequencia) {
            //$dadosFrequencias[$frequencia->aluno][$frequencia->data] = $frequencia->presenca;
            $dadosFrequencias[$frequencia->aluno]['nome'] = $frequencia->aluno;
            $dadosFrequencias[$frequencia->aluno]['frequencias'][$frequencia->data] = $frequencia->presenca;
        }

        return view('frequencias', compact('dadosFrequencias'));
        //return $dadosFrequencias;
    }
}
