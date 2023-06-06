@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">{{$coordenacao->nome}}</h5>
                <p class="mb-0">This is a sample page </p>
                @foreach ($coordenacao->cursos as $curso)
                    <ul>
                        <li>
                            {{$curso->nome}}
                            <a href="{{route('cursos.show', $curso->id)}}" class="btn btn-primary btn-sm">
                                <i class="fas fa-info-circle"></i>
                                Detalhes
                            </a>
                            
                        </li>
                    </ul>
                    
                @endforeach
            </div>
        </div>
    </div>
@endsection