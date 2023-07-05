@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title fw-semibold text-center">ALUNOS</h5>
    </div>
    <div class="card-body">
        
            <div class="table-responsive">
                <table id="tbl_alunos" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nome</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Fone 1</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Fone 2</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">E-mail</h6>
                            </th>
                            <th class="border-bottom-0 text-center">
                                <h6 class="fw-semibold mb-0">Ações</h6>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($alunos as $aluno)
                        <tr>
                            <td>{{$aluno->nome}}</td>
                            <td>{{$aluno->fone_contato1}}</td>
                            <td>{{$aluno->fone_contato2}}</td>
                            <td>{{$aluno->email_contato2}}</td>
                            <td class="text-center">
                                <a href="{{route('alunos.show', $aluno->id)}}" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Informações do(a) aluno(a)">
                                    <i class="ti ti-eye"></i>
                                </a>
                                <a href="{{route('alunos.edit', $aluno->id)}}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar cadastro do(a) aluno(a)">
                                    <i class="ti ti-edit"></i>    
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
    
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap5.min.css')}}" />
@endpush

@push('scripts')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#tbl_alunos').DataTable();
    });
</script>
@endpush

