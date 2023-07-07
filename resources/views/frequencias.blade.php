@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title fw-semibold text-center">VILA DAS ARTES {{$turma->ano_letivo}}</h5>
        <h6 class="card-title fw-semibold text-center">{{$curso->coordenacao->nome}}</h6>
    </div>
    <div class="card-body">
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col-md-5">
                            <h6>PROGRAMA: <strong>{{$curso->nome}}</strong></h6>                  
                        </div>
                        <div class="col-md-5">
                            <h6>MÓDULO: <strong>{{$modulo->nome}}</strong></h6>                  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <h6>PERÍODO: <strong>{{$mes}}</strong></h6>                  
                        </div>
                        <div class="col-md-5">
                            <h6>HORÁRIO:</h6>                  
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <h6>PROFESSOR(A): </strong></h6>                  
                        </div>
                        <div class="col-md-5">
                            <h6>COORDENADOR(A): <strong>{{$curso->coordenacao->coordenador}}</strong></h6>                  
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="row">
                        <h2><strong>{{$turma->nome}}</strong></h2>
                    </div>
                </div>
                
            </div>
            <hr class="border border-dark border-1 opacity-30 my-2">
        
            <div class="table-responsive">
                <table id="" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                    <thead>
                        <tr>
                            <th>ALUNOS</th>
                            @foreach ($datas as $data)
                                <th>{{ \Carbon\Carbon::parse($data->data)->format('d/m') }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($alunos as $aluno)
                        <tr>
                            <td>
                                {{$aluno->nome}}
                            </td>
                            @foreach($dadosFrequencias[$aluno->id] as $presenca)
                            <td>
                                {{$presenca ? 'P' : 'F'}}
                            </td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
    
@endsection



