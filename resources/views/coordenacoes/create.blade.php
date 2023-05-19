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

                <div class="row mt-5 mb-3">

                    <div class="col-sm-12 d-flex justify-content-end">
                        
                        <button class="btn btn-warning" type="reset">
                            <i class="fas fa-trash"></i>
                            Limpar
                        </button>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#storeCoord">
                            <i class="fas fa-save"></i>
                            Salvar
                        </button>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>

                    </div>

                </div>
                
                

            </form>

            
  
        <!-- Final do Corpo do Cartão -->
        </div>
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary"></h6>          

        </div>
    <!-- Final do Cartão -->
    </div>

<!-- End Page Content -->
</div>

<!--Modal para Salvar -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


@endsection

@push('level-plugins')
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
@endpush


