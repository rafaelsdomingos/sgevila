@extends('layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Nova Coordenação</h5>
            
            <div>
                <a href="{{route('coordenacoes.index')}}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>

        <div class="card-body">

            <form method="POST" action="{{route('coordenacoes.store')}}">
                @csrf
                <h5 class="text-center h4 p-3"></h5>

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <label class="form-label"><strong>NOME</strong></label>
                        <input class="form-control" name="nome" type="text" value="" aria-label="" >
            
                    </div>

                    <div class="col-sm-2">
                        <label class="form-label"><strong>SIGLA</strong></label>
                        <input class="form-control" name="sigla" type="text" value="" aria-label="" >
            
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4">
                        <label class="form-label"><strong>COORDENADOR</strong></label>
                        <input class="form-control" name="coordenador" type="text" value="" aria-label="" >
                    </div>

                    <div class="col-sm-4">
                        <label class="form-label"><strong>FONE</strong></label>
                        <input class="form-control" name="fone" type="text" value="" aria-label="" >
                    </div>

                    <div class="col-sm-4">
                        <label class="form-label"><strong>EMAIL</strong></label>
                        <input class="form-control" name="email" type="email" value="" aria-label="" >
                    </div>
                </div>           
  
        <!-- Final do Corpo do Cartão -->
        </div>
        
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary"></h6>

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
                            Deseja salvar a nova coordenação?
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
    <!-- Final do Cartão -->
    </div>

<!-- End Page Content -->
</div>

@endsection

@push('level-plugins')
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
@endpush


