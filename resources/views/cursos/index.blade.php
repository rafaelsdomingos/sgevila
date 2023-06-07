@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title fw-semibold text-center">CURSOS</h5>
    </div>
    <div class="card-body">
        
            <div class="table-responsive">
                <table id="tbl_cursos" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nome</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Coordenacão</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Detalhes</h6>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cursos as $curso)
                        <tr>
                            <td>{{$curso->nome}}</td>
                            <td>{{$curso->coordenacao->sigla}}</td>
                            <td>
                                <a href="{{route('cursos.show', $curso->id)}}" class="btn btn-secondary btn-sm">
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
        $('#tbl_cursos').DataTable();
    });
</script>
@endpush

