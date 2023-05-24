@extends('layouts.main')



@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
          <h6 class="m-0 font-weight-bold text-primary">Lista de Coordenações</h6>

          <a href="{{route('coordenacoes.create')}}" class="btn btn-success">
            <i class="fas fa-plus"></i>
            Nova Coordenação
          </a>

      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>NOME</th>
                        <th>SIGLA</th>
                        <th>COORDENADOR</th>
                        <th>FONE</th>
                        <th>EMAIL</th>
                        <th></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>NOME</th>
                        <th>SIGLA</th>
                        <th>COORDENADOR</th>
                        <th>FONE</th>
                        <th>EMAIL</th>
                        <th></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($coordenacoes as $coordenacao)
                      <tr>
                          <td>{{$coordenacao->nome}}</td>
                          <td>{{$coordenacao->sigla}}</td>
                          <td>{{$coordenacao->coordenador}}</td>
                          <td>{{$coordenacao->fone}}</td>
                          <td>{{$coordenacao->email}}</td>
                          <td>
                              <a href="/alunos/{{$coordenacao->id}}" class="btn btn-primary btn-sm">
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
<!-- /.container-fluid -->
    
@endsection

@push('styles')
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@push('level-plugins')
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endpush

@push('custom-plugins')
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endpush