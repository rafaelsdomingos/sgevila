@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title fw-semibold text-center">TURMAS</h5>
    </div>
    <div class="card-body">
        
            <div class="table-responsive">
                <table id="tbl_coord" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">ANO</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Turma</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Curso</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Ações</h6>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($turmas as $turma)
                        <tr>
                            <td>{{$turma->ano_letivo}}</td>
                            <td>{{$turma->nome}}</td>
                            <td>{{$turma->curso->nome}}</td>
                            <td>
                                <a href="{{route('turmas.show', $turma->id)}}" class="btn btn-secondary btn-sm">
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
    
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap5.min.css')}}" />
@endpush


@push('scripts')
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#tbl_coord').DataTable();
    });
</script>
@endpush

