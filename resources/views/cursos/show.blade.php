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

                <a href="{{route('cursos.edit', $curso->id)}}" class="btn btn-warning">
                    <i class="ti ti-pencil"></i>
                    Editar
                </a>
            </div>
        </div>
        <div class="card-body">
     
                        
            <form method="POST" action="{{route('cursos.destroy', $curso->id)}}">
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

    <!--Card com as etapas do curso -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Etapas</h5>
        </div>
        <div class="card-body">

            <div class="accordion">

                @foreach($curso->etapas as $etapa)
                    
                <div class="accordion-item" id="accordionEtapas">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#etapa{{$etapa->id}}" aria-expanded="false" aria-controls="etapa{{$etapa->id}}">
                            <strong>{{$etapa->nome}}</strong>
                          </button>
                        </h2>
                        <div id="etapa{{$etapa->id}}" class="accordion-collapse collapse" data-bs-parent="#accordionEtapas">
                            <div class="accordion-body">

                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0 align-middle table-hover mt-2">
                                        <thead class="text-dark fs-4">
                                            <tr>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Módulo</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Carga Horária</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0">Quantidade de Aulas</h6>
                                                </th>
                                                <th class="border-bottom-0">
                                                    <h6 class="fw-semibold mb-0"></h6>
                                                </th>
                                            </tr>
                                        </thead>
                    
                                        <tbody>
                                            @foreach ($etapa->modulos as $modulo)
                                            <tr>
                                                <td>{{$modulo->nome}}</td>
                                                <td>{{$modulo->carga_horaria}}</td>
                                                <td>{{$modulo->qtd_aula}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-secondary btn-sm">
                                                        <i class="ti ti-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-warning btn-sm">
                                                        <i class="ti ti-pencil"></i>    
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

                @endforeach


            </div>
           

        </div>
    </div>


    
</div>


@endsection