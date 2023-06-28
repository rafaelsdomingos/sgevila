@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Informações sobre a Coordenação</h5>
            <div>
                <a href="{{route('coordenacoes.index')}}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i>
                    Voltar
                </a>

                <a href="{{route('coordenacoes.edit', $coordenacao->id)}}" class="btn btn-warning">
                    <i class="ti ti-pencil"></i>
                    Editar
                </a>
            </div>
        </div>
        <div class="card-body">
     
                        
            <form method="POST" action="{{route('coordenacoes.destroy', $coordenacao->id)}}">
                @method('DELETE')
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome da Coordenação</label>
                        <input class="form-control" name="nome" type="text" value="{{$coordenacao->nome}}" aria-label="Nome da Coordenação" readonly>
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Sigla</label>
                        <input class="form-control" name="sigla" type="text" value="{{$coordenacao->sigla}}" aria-label="Sigla" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Coordenador(a)</label>
                        <input class="form-control" name="coordenador" type="text" value="{{$coordenacao->coordenador}}" aria-label="Coordenador(a)" readonly>
                      
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Telefone</label>
                        <input class="form-control" name="fone" type="text" value="{{$coordenacao->fone}}" aria-label="" readonly>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="text" value="{{$coordenacao->email}}" aria-label="" readonly>
                    </div>
                </div>

             

                <!--Botões de submit-->
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold"></h5>
                    <div>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarCoord">
                            <i class="ti ti-trash"></i>
                            Deletar
                        </button>
                    </div>
                </div>

                <!--Modal para Salvar -->
                <div class="modal fade" id="deletarCoord" tabindex="-1" aria-labelledby="deletarCoord" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="deletarCoordLabel"><strong>Deletar Coordenação</strong></h6>
                            </div>
                            <div class="modal-body">
                                Deseja realmente deletar a <strong>{{$coordenacao->nome}}</strong>?
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
            <h5 class="card-title fw-semibold">Cursos cadastrados na coordenação</h5>
        </div>
        <div class="card-body">          
            
            <div class="table-responsive">
                <table id="tbl_alunos" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Curso</h6>
                            </th>

                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Descrição</h6>
                            </th>
                                                        
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Ações</h6>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($coordenacao->cursos as $curso)
                        <tr>
                            <td>{{$curso->nome}}</td>
                            <td>{{$curso->descricao}}</td>
                            <td>
                                <a href="{{route('cursos.show', $curso->id)}}" class="btn btn-primary btn-sm">
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