@extends('layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">NOVO ALUNO</h5>
            
            <div>
                <a href="{{route('alunos.index')}}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>

        <div class="card-body">

            <form method="POST" action="{{route('alunos.store')}}">
                @csrf
                <fieldset>
                    <h6 class="text-center h4 p-3 my-5">DADOS PESSOAIS</h6>
    
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <label class="form-label"><strong>NOME</strong></label>
                            <input class="form-control" name="nome" type="text" value="" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>NASCIMENTO</strong></label>
                            <input class="form-control" name="nascimento" type="text" value="" aria-label="" >
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="form-label"><strong>NACIONALIDADE</strong></label>
                            <input class="form-control" name="nacionalidade" type="text" value="" aria-label="" >
                
                        </div>
    
                        <div class="col-sm-4">
                            <label class="form-label"><strong>NATURALIDADE</strong></label>
                            <input class="form-control" name="naturalidade" type="text" value="" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>SEXO</strong></label>
                            <select class="custom-select" name="sexo">
                                <option selected></option>
                                <option value="FEMININO">FEMININO</option>
                                <option value="MASCULINO">MASCULINO</option>
                            </select>
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>COR / RAÇA</strong></label>
                            <input class="form-control" name="raca" type="text" value="" aria-label="" >
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label"><strong>ENDEREÇO</strong></label>
                            <input class="form-control" name="endereco" type="text" aria-label="" >
                        </div>
    
                        
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="form-label"><strong>BAIRRO</strong></label>
                            <input class="form-control" name="bairro" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-4">
                            <label class="form-label"><strong>CIDADE</strong></label>
                            <input class="form-control" name="cidade" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-1">
                            <label class="form-label"><strong>UF</strong></label>
                            <input class="form-control" name="uf" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>CEP</strong></label>
                            <input class="form-control" id="cep" name="cep" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-1">
                            <label class="form-label"><strong>REGIONAL</strong></label>
                            <input class="form-control" name="regional" type="text" aria-label="" >
                        </div>
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <label class="form-label"><strong>FONE</strong></label>
                            <input class="form-control telefone" name="fone1" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-3">
                            <label class="form-label"><strong>FONE 2</strong></label>
                            <input class="form-control telefone" name="fone2" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-6">
                            <label class="form-label"><strong>E-MAIL</strong></label>
                            <input class="form-control" name="email" type="email" aria-label="" >
                        </div>
    
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <label class="form-label"><strong>POSSUI ALGUMA NECESSIDADE ESPECIAL?</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">SIM</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="inlineRadio2" value="0">
                                <label class="form-check-label" for="inlineRadio2">NÃO</label>
                            </div>
                            <br><br><label class="form-label"><strong>SE SIM, QUAL SERIA?</strong></label>
                            <input class="form-control" name="tipo_deficiencia" type="text" aria-label="" >
                        </div>
    
                    </div>
    
                    <div class="row mb-3">
    
                        <div class="col-sm-12">
                            <label class="form-label"><strong>POSSUI ALGUMA ALERGIA?</strong></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="alergia" id="inlineRadio12" value="1">
                                <label class="form-check-label" for="inlineRadio12">SIM</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="alergia" id="inlineRadio22" value="0">
                                <label class="form-check-label" for="inlineRadio22">NÃO</label>
                            </div>
                            <br><br><label class="form-label"><strong>SE SIM, QUAL SERIA?</strong></label>
                            <input class="form-control" name="tipo_arlegia" type="text" aria-label="" >
                        </div>
                    </div>
                </fieldset>


                <fieldset>
                    <h6 class="text-center h4 p-3 my-5">ESCOLARIDADE</h6>
    
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label"><strong>ESCOLARIDADE</strong></label>
                            <select class="custom-select" name="escolaridade">
                                <option selected></option>
                                <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                                <option value="ENSINO FUNDAMENTAL">ENSINO FUNDAMENTAL</option>
                                <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
                                <option value="ENSINO MÉDIO">ENSINO MÉDIO</option>
                                <option value="ENSINO SUPERIOR INCOMPLETO">ENSINO SUPERIOR INCOMPLETO</option>
                                <option value="ENSINO SUPERIOR">ENSINO SUPERIOR</option>
                              </select>
                        </div>
    
                        <div class="col-sm-3">
                            <label class="form-label"><strong>SÉRIE</strong></label>
                            <input class="form-control" name="serie" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-3">
                            <label class="form-label"><strong>TURNO</strong></label>
                            <select class="custom-select" name="turno">
                                <option selected></option>
                                <option value="MANHÃ">MANHÃ</option>
                                <option value="TARDE">TARDE</option>
                                <option value="NOITE">NOITE</option>
                            </select>
                        </div>
    
                    </div>
    
    
                    <div class="row mb-3">
                        <div class="col-sm-9">
                            <label class="form-label"><strong>INSTITUIÇÃO DE ENSINO</strong></label>
                            <input class="form-control" name="instituicao" type="text" aria-label="" >
                        </div>
    
    
                        <div class="col-sm-3">
                            <label class="form-label"><strong>TIPO DE INSTITUIÇÃO DE ENSINO</strong></label>
                            <select class="custom-select" name="tipo_instituicao">
                                <option selected></option>
                                <option value="PÚBLICA">PÚBLICA</option>
                                <option value="PRIVADA">PRIVADA</option>
                            </select>
                        </div>
    
                    </div>
                </fieldset>



                <fieldset>
                    <h6 class="text-center h4 p-3 my-5">DOCUMENTAÇÃO</h6>
    
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <label class="form-label"><strong>RG</strong></label>
                            <input class="form-control" name="rg" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-3">
                            <label class="form-label"><strong>EMISSOR</strong></label>
                            <input class="form-control" name="emissor" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-1">
                            <label class="form-label"><strong>UF</strong></label>
                            <input class="form-control" name="uf_emissor" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-4">
                            <label class="form-label"><strong>CPF</strong></label>
                            <input class="form-control" name="cpf" type="text" aria-label="" >
                        </div>
    
                    </div>
                </fieldset>


                <fieldset>
                    <h6 class="text-center h4 p-3 my-5">IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS</h6>
    
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label"><strong>NOME DA MÃE</strong></label>
                            <input class="form-control" name="mae" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-3">
                            <label class="form-label"><strong>RG DA MÃE</strong></label>
                            <input class="form-control" name="rgmae" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>EMISSOR</strong></label>
                            <input class="form-control" name="emissor_rg_mae" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-1">
                            <label class="form-label"><strong>UF</strong></label>
                            <input class="form-control" name="uf_rg_mae" type="text" aria-label="" >
                        </div>
    
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label"><strong>NOME DO PAI</strong></label>
                            <input class="form-control" name="pai" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-3">
                            <label class="form-label"><strong>RG DO PAI</strong></label>
                            <input class="form-control" name="rgpai" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>EMISSOR</strong></label>
                            <input class="form-control" name="emissor_rg_pai" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-1">
                            <label class="form-label"><strong>UF</strong></label>
                            <input class="form-control" name="uf_rg_pai" type="text" aria-label="" >
                        </div>
    
                    </div>
                </fieldset>


                <fieldset>

                    <h6 class="text-center h4 p-3 my-5">CONTATOS</h6>
    
    
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label"><strong>NOME CONTATO 1</strong></label>
                            <input class="form-control" name="nome_contato1" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>FONE</strong></label>
                            <input class="form-control" name="fone_contato1" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-4">
                            <label class="form-label"><strong>EMAIL</strong></label>
                            <input class="form-control" name="email_contato1" type="text" aria-label="" >
                        </div>
    
                    </div>
    
    
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label"><strong>NOME CONTATO 2</strong></label>
                            <input class="form-control" name="nome_contato2" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>FONE</strong></label>
                            <input class="form-control" name="fone_contato2" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-4">
                            <label class="form-label"><strong>EMAIL</strong></label>
                            <input class="form-control" name="email_contato2" type="text" aria-label="" >
                        </div>
    
                    </div>
    
                    <div class="row mb-3">
                        <div class="col-sm-6">
                            <label class="form-label"><strong>NOME CONTATO 3</strong></label>
                            <input class="form-control" name="nome_contato3" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-2">
                            <label class="form-label"><strong>FONE</strong></label>
                            <input class="form-control" name="fone_contato3" type="text" aria-label="" >
                        </div>
    
                        <div class="col-sm-4">
                            <label class="form-label"><strong>EMAIL</strong></label>
                            <input class="form-control" name="email_contato3" type="text" aria-label="" >
                        </div>
                    </div>

                </fieldset>


                <fieldset>

                    <h6 class="text-center h4 p-3 my-5">DOCUMENTAÇÃO ENTREGUE</h6>
    
                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="comp_endereco" id="flexCheckComprovanteEndereco">
                                <label class="form-check-label" for="flexCheckComprovanteEndereco">
                                  COMPROVANTE DE ENDEREÇO (CÓPIA)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="dec_matricula" id="flexCheckDeclaracaoMatricula">
                                <label class="form-check-label" for="flexCheckDeclaracaoMatricula">
                                  DECLARAÇÃO DE MATRÍCULA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="atestado" id="flexCheckAtestadoMedico">
                                <label class="form-check-label" for="flexCheckflexCheckAtestadoMedico">
                                  ATESTADO MÉDICO
                                </label>
                            </div>
                        </div>
    
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="renda" id="flexCheckComprovanteRenda">
                                <label class="form-check-label" for="flexCheckComprovanteRenda">
                                  COMPROVANTE DE RENDA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="certidao" id="flexCheckCertidaoNascimento">
                                <label class="form-check-label" for="flexCheckCertidaoNascimento">
                                  CERTIDÃO DE NASCIMENTO
                                </label>
                            </div>
                        </div>
    
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="foto" id="flexCheckFoto3x4">
                                <label class="form-check-label" for="flexCheckFoto3x4">
                                  FOTO 3X4
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="rg_responsavel" id="flexCheckRgResponsavel">
                                <label class="form-check-label" for="flexCheckRgResponsavel">
                                  RG DO RESPONSÁVEL (CÓPIA)
                                </label>
                            </div>
                        </div>
    
                    </div>
                </fieldset>

  
        <!-- Final do Corpo do Cartão -->
        </div>
        
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary"></h6>

            <div>
                <button class="btn btn-warning" type="reset">
                    <i class="fas fa-trash"></i>
                    Limpar
                </button>
    
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#salvarAluno">
                    <i class="fas fa-save"></i>
                    Salvar
                </button>
            </div>
            
        </div>

            <!--Modal para Salvar -->
            <div class="modal fade" id="salvarAluno" tabindex="-1" aria-labelledby="salvarAluno" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title fs-5" id="salvarAlunoLabel"><strong>Salvar Aluno</strong></h6>
                        </div>
                        <div class="modal-body">
                            Deseja salvar o nome Aluno?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
                   
            </form>
        </div>
    <!-- Final do Cartão -->
    </div>

<!-- End Page Content -->
</div>

@endsection

@push('level-plugins')
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script>
    $('#cep').mask('00000-000');
    $('.telefone').mask('(00) 00000-0000');
    

  </script>
@endpush


