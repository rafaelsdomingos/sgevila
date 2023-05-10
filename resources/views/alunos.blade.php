@extends('layouts.default')



@section('content')

<div class="container mt-4">


</div>

<div class="container mt-4">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Fone 1</th>
            <th scope="col">Fone 2</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr>
                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->nascimento}}</td>
                <td>{{$aluno->fone1}}</td>
                <td>{{$aluno->fone2}}</td>
                <td><a class="btn btn-primary" href="/alunos/{{$aluno->id}}" role="button">Detalhes</a></td>
            </tr>
                
            @endforeach
        </tbody>

          
      </table>
</div>

    
@endsection