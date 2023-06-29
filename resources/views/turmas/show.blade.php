@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Informações sobre a Turma</h5>
            <div>
                <a href="{{route('turmas.index')}}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i>
                    Voltar
                </a>

                <a href="#" class="btn btn-warning">
                    <i class="ti ti-pencil"></i>
                    Editar
                </a>
            </div>
        </div>
        <div class="card-body">
     
                        
            <form method="POST" action="#">
                @method('DELETE')
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Turma</label>
                        <input class="form-control" name="nome" type="text" value="{{$turma->nome}}" aria-label="Nome da Coordenação" readonly>
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Ano</label>
                        <input class="form-control" name="ano_letivo" type="text" value="{{$turma->ano_letivo}}" aria-label="Ano" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Turno</label>
                        <input class="form-control" name="turno" type="text" value="{{$turma->turno}}" aria-label="Turno" readonly>
                      
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label class="form-label">Descrição</label>
                        <input class="form-control" name="descricao" type="text" value="{{$turma->descricao}}" aria-label="Descrição" readonly>
                    </div>

                </div>

             

                <!--Botões de submit-->
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold"></h5>
                    <div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarTurna">
                            <i class="ti ti-trash"></i>
                            Deletar
                        </button>
                    </div>
                </div>

                <!--Modal para Salvar -->
                <div class="modal fade" id="deletarTurna" tabindex="-1" aria-labelledby="deletarTurma" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="deletarTurmaLabel"><strong>Deletar Coordenação</strong></h6>
                            </div>
                            <div class="modal-body">
                                Deseja realmente deletar a <strong>{{$turma->nome}}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <!--card dos cursos da coordenação -->
    <div class="card">
        <!--
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Alunos(as) matriculados na Turma</h5>
        </div>
        -->
        <div class="card-body">
            
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#aba1">Alunos(as)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#aba2">Módulos</a>
                </li>
            </ul>

            <div id="aba" class="tab-content">
                <div id="aba1" class="tab-pane fade active show">

                    <div class="table-responsive">
                        <table id="tbl_alunos" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Aluno(a)</h6>
                                    </th>
        
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Responsável</h6>
                                    </th>
                                                                
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Ações</h6>
                                    </th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach ($turma->alunos as $aluno)
                                <tr>
                                    <td>{{$aluno->nome}}</td>
                                    <td>{{$aluno->mae}}</td>
                                    <td>
                                        <a href="{{route('alunos.show', $aluno->id)}}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                        Detalhes
                                        </a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>

                <div id="aba2" class="tab-pane fade">
                    
                    <div class="table-responsive">
                        <table id="tbl_alunos" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Módulos</h6>
                                    </th>
        
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Carga Horária</h6>
                                    </th>
                                </tr>
                            </thead>
        
                            <tbody>
                                @foreach ($turma->etapa->modulos as $modulo)
                                <tr>
                                    <td>{{$modulo->nome}}</td>
                                    <td>{{$modulo->carga_horaria}}</td>
                                    <td>
                                        {{$modulo->id}}-{{$turma->id}}
                                        <a href="{{ route('modulos.show', [$modulo->id, $turma->id] ) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                        Detalhes
                                        </a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
            
        </div>
    </div>


    
</div>


@endsection