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
                    <thead>
                        <tr>
                            <th>Aluno</th>
                            @foreach ($dadosFrequencias['João']->frequencias as $frequencia)
                                <th>{{ $frequencia }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    
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

