@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Informações sobre o Curso</h5>
            <div>
                <a href="{{route('cursos.index')}}" class="btn btn-secondary">
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
                    <div class="col-md-9 mb-3">
                        <label class="form-label">Curso</label>
                        <input class="form-control" name="nome" type="text" value="{{$curso->nome}}" aria-label="Nome do Curso" readonly>
                      
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Coordenacação</label>
                        <input class="form-control" name="sigla" type="text" value="{{$curso->coordenacao->sigla}}" aria-label="Sigla" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Descrição</label>
                        <input class="form-control" name="descricao" type="text" value="{{$curso->descricao}}" aria-label="Descrição" readonly>
                      
                    </div>
                </div>

             

                <!--Botões de submit-->
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold"></h5>
                    <div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarCurso">
                            <i class="ti ti-trash"></i>
                            Deletar
                        </button>
                    </div>
                </div>

                <!--Modal para Salvar -->
                <div class="modal fade" id="deletarCurso" tabindex="-1" aria-labelledby="deletarCurso" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="deletarCursoLabel"><strong>Deletar Curso</strong></h6>
                            </div>
                            <div class="modal-body">
                                Deseja realmente deletar o <strong>{{$curso->nome}}</strong>?
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
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Turmas deste curso</h5>
        </div>
        <div class="card-body">          
            
            <div class="table-responsive">
                <table id="tbl_alunos" class="table text-nowrap mb-0 align-middle table-striped mt-2">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Ano</h6>
                            </th>

                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Turma</h6>
                            </th>
                                                        
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Turno</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Ações</h6>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($curso->turmas as $turma)
                        <tr>
                            <td>{{$turma->ano_letivo}}</td>
                            <td>{{$turma->nome}}</td>
                            <td>{{$turma->turno}}</td>
                            <td>
                                <a href="{{route('turmas.show', $turma->id)}}" class="btn btn-primary btn-sm">
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


@endsection