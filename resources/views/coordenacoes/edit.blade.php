@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">EDITAR COORDENAÇÃO</h5>
            <div>
                <a href="{{route('coordenacoes.show', $coordenacao->id)}}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
        <div class="card-body">
     
                        
            <form method="POST" action="{{route('coordenacoes.update', $coordenacao->id)}}">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome da Coordenação</label>
                        <input class="form-control" name="nome" type="text" value="{{$coordenacao->nome}}" aria-label="" >
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Sigla</label>
                        <input class="form-control" name="sigla" type="text" value="{{$coordenacao->sigla}}" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Coordenador(a)</label>
                        <input class="form-control" name="coordenador" type="text" value="{{$coordenacao->coordenador}}" aria-label="" >
                      
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Telefone</label>
                        <input class="form-control telefone" name="fone" type="text" value="{{$coordenacao->fone}}" aria-label="" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="text" value="{{$coordenacao->email}}" aria-label="" >
                    </div>
                </div>

             

                <!--Botões de submit-->
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold"></h5>
                    <div>
                        <button class="btn btn-warning" type="reset">
                            <i class="ti ti-refresh"></i>
                            Limpar
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarCoord">
                            <i class="ti ti-save"></i>
                            Salvar
                        </button>
                    </div>
                </div>

                <!--Modal para Salvar -->
                <div class="modal fade" id="editarCoord" tabindex="-1" aria-labelledby="editarCoord" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="editarCoordLabel"><strong>Editar Coordenação</strong></h6>
                            </div>
                            <div class="modal-body">
                                Deseja salvar as alterações em <strong>{{$coordenacao->nome}}</strong>?
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

@push('scripts')
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/masks.js')}}"></script>
    <script src="{{asset('js/form.validation.js')}}"></script>
@endpush