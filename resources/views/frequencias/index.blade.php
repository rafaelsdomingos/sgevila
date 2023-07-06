@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Buscar Frequência</h5>
        </div>
        <div class="card-body">
            @livewire('form-busca-frequencia')

        </div>
    </div>
</div>
    
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap5.min.css')}}" />
    @livewireStyles
@endpush

@push('scripts')
@livewireScripts
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap5.min.js')}}"></script>
@endpush