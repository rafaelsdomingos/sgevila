@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
    <div class="card-header">
        <h5 class="card-title fw-semibold text-center">FREQUÊNCIA</h5>
    </div>
    <div class="card-body">
        
            <div class="table-responsive">
                <table id="" class="table text-nowrap mb-0 align-middle table-hover mt-2">
                    <thead>
                        <tr>
                            <th>ALUNOS</th>
                            @foreach ($datas as $data)
                                <th>{{ \Carbon\Carbon::parse($data->data)->format('d/m') }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($alunos as $aluno)
                        <tr>
                            <td>
                                {{$aluno->nome}}
                            </td>
                            @foreach($dadosFrequencias[$aluno->id] as $presenca)
                            <td>
                                {{$presenca ? 'P' : 'F'}}
                            </td>
                            @endforeach
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

