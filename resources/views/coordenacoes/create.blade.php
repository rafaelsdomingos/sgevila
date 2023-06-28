@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Cadastro de Coordenações</h5>
            <div>
                <a href="{{route('coordenacoes.index')}}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
        <div class="card-body">
     
                        
            <form method="POST" action="{{route('coordenacoes.store')}}" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome da Coordenação</label>
                        <input class="form-control" name="nome" type="text" value="" aria-label="nome da coordenação" required>
                        <div class="invalid-feedback">Você deve informar o nome da coordenação</div>
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Sigla</label>
                        <input class="form-control" name="sigla" type="text" value="" aria-label="sigla" required>
                        <div class="invalid-feedback">Você deve informar a sigla da coordenação.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Coordenador(a)</label>
                        <input class="form-control" name="coordenador" type="text" aria-label="responsável pela coordenação" required>
                        <div class="invalid-feedback">Você deve informar o nome do(a) coordenador(a).</div>
                      
                    </div>
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Telefone</label>
                        <input class="form-control telefone" name="fone" type="text" aria-label="telefone" required>
                        <div class="invalid-feedback">Você deve informar o telefone da coordenação.</div>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">E-mail</label>
                        <input class="form-control" name="email" type="text" aria-label="e-mail" required>
                        <div class="invalid-feedback">Você deve informar o e-mail da coordenação.</div>
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

                        <button type="submit" class="btn btn-success">
                            <i class="ti ti-save"></i>
                            Salvar
                        </button>
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