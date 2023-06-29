@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">{{$turma->nome}}</h5>
                {{$modulo->nome}}
            </div>
        </div>
    </div>
@endsection



