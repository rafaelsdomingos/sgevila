@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Editar Curso</h5>
            <div>
                <a href="{{route('cursos.index')}}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
        <div class="card-body">
     
                        
            <form method="POST" action="{{route('cursos.update', $curso->id)}}" class="needs-validation" novalidate>
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome do Curso</label>
                        <input class="form-control" name="nome" type="text" value="{{$curso->nome}}" aria-label="nome do curso" required>
                        <div class="invalid-feedback">Você deve informar o nome do curso</div>
                      
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Coordenação</label>
                        <select class="form-select" aria-label="Sexo" name="coordenacao_id" required>
                            <option ></option>
                            @foreach ($coordenacoes as $coordenacao)
                                <option value="{{$coordenacao->id}}" {{$coordenacao->id == $curso->id ? 'selected' : ''}}>{{$coordenacao->sigla}}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Você deve informar a coordenação</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Modalidade</label>
                        <select class="form-select" aria-label="Modalidade" name="modalidade" value="{{$curso->modalidade}}" required>
                            <option ></option>
                            <option value="PRESENCIAL" {{$curso->modalidade == "PRESENCIAL"? 'selected' : ''}}>PRESENCIAL</option>
                            <option value="REMOTO" {{$curso->modalidade == "REMOTO"? 'selected' : ''}}>REMOTO</option>
                        </select>
                        <div class="invalid-feedback">Você deve informar a modalidade</div>
                    </div>
                    <div class="col-sm-8 mb-3">
                        <label class="form-label">Descrição</label>
                        <input class="form-control" name="descricao" type="text" aria-label="descrição" value="{{$curso->descricao}}" required>
                        <div class="invalid-feedback">Você deve informar a descrição</div>
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