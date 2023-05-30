@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Cadastro de Coordenações</h5>
            <div>
                <a href="{{route('alunos.index')}}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
        <div class="card-body">
     
                        
            <form method="POST" action="{{route('coordenacoes.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome da Coordenação</label>
                        <input class="form-control" name="nome" type="text" value="" aria-label="" >
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Sigla</label>
                        <input class="form-control" name="sigla" type="text" value="" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Coordenador(a)</label>
                        <input class="form-control" name="coordenador" type="text" value="" aria-label="" >
                      
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Telefone</label>
                        <input class="form-control" name="fone" type="text" value="" aria-label="" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="text" value="" aria-label="" >
                    </div>
                </div>

             

                <!--Botões de submit-->
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold"></h5>
                    <div>
                        <button class="btn btn-warning" type="reset">
                            <i class="fas fa-trash"></i>
                            Limpar
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#salvarCoord">
                            <i class="fas fa-save"></i>
                            Salvar
                        </button>
                    </div>
                </div>

                <!--Modal para Salvar -->
                <div class="modal fade" id="salvarCoord" tabindex="-1" aria-labelledby="salvarCoord" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="salvarCoordLabel"><strong>Salvar Coordenação</strong></h6>
                            </div>
                            <div class="modal-body">
                                Deseja salvar a nova Coordenação?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            


        </div>
    </div>
</div>


@endsection