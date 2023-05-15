@extends('layouts.main')



@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex justify-content-between align-items-center">
          <h6 class="m-0 font-weight-bold text-primary">Lista de Alunos</h6>

          <a href="#" class="btn btn-success">
            <i class="fas fa-plus"></i>
            Novo Aluno
          </a>

      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>NOME</th>
                          <th>FONE 1</th>
                          <th>FONE 2</th>
                          <th>EMAIL</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>NOME</th>
                          <th>FONE 1</th>
                          <th>FONE 2</th>
                          <th>EMAIL</th>
                          <th></th>
                      </tr>
                  </tfoot>
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
