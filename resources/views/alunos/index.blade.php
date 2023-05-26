@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4 text-center">ALUNOS</h5>
            <div class="table-responsive">
                <table id="tbl_alunos" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nome</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nascimento</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Fone 2</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Email</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Detalhes</h6>
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
                            <td>
                                <a href="/alunos/{{$aluno->id}}" class="btn btn-primary btn-sm">
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

