@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Cadastro de Alunos</h5>
            <div>
                <a href="{{route('alunos.index')}}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
        <div class="card-body">

            <h5 class="card-title text-center my-3">DADOS PESSOAIS</h5>           
                        
            <form method="POST" action="{{route('alunos.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome Completo</label>
                        <input class="form-control" name="nome" type="text" value="" aria-label="" >
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Nascimento</label>
                        <input class="form-control" name="nascimento" type="date" value="" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Nacionalidade</label>
                        <input class="form-control" name="nacionalidade" type="text" value="" aria-label="" >
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Naturalidade</label>
                        <input class="form-control" name="naturalidade" type="text" value="" aria-label="" >
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Sexo</label>
                        <select class="form-select" aria-label="Sexo" name="sexo">
                            <option selected></option>
                            <option value="FEMININO">FEMININO</option>
                            <option value="MASCULINO">MASCULINO</option>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Cor / Raça</label>
                        <input class="form-control" name="raca" type="text" value="" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Endereço</label>
                        <input class="form-control" name="endereco" type="text" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Bairro</label>
                        <input class="form-control" name="bairro" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Cidade</label>
                        <input class="form-control" name="cidade" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">CEP</label>
                        <input class="form-control cep" name="cep" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">SER</label>
                        <input class="form-control" name="regional" type="text" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control celular" name="fone1" type="text" aria-label="" >
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Telefone</label>
                        <input class="form-control telefone" name="fone2" type="text" aria-label="" >
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="email" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Possui alguma necessidade especial?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">SIM</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="inlineRadio2" value="0">
                                <label class="form-check-label" for="inlineRadio2">NÃO</label>
                            </div>
                            <br><br><label class="form-label">Se sim, qual seria?</strong></label>
                            <input class="form-control" name="tipo_deficiencia" type="text" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Possui alguma alergia?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alergia" id="inlineRadio12" value="1">
                            <label class="form-check-label" for="inlineRadio12">SIM</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alergia" id="inlineRadio22" value="0">
                            <label class="form-check-label" for="inlineRadio22">NÃO</label>
                        </div>
                        <br><br><label class="form-label">Se sim, qual seria?</label>
                        <input class="form-control" name="tipo_arlegia" type="text" aria-label="" >
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">ESCOLARIDADE</h5>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Escolaridade</label>
                        <select class="form-select" name="escolaridade">
                            <option selected></option>
                            <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                            <option value="ENSINO FUNDAMENTAL">ENSINO FUNDAMENTAL</option>
                            <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
                            <option value="ENSINO MÉDIO">ENSINO MÉDIO</option>
                            <option value="ENSINO SUPERIOR INCOMPLETO">ENSINO SUPERIOR INCOMPLETO</option>
                            <option value="ENSINO SUPERIOR">ENSINO SUPERIOR</option>
                        </select>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Série</label>
                        <input class="form-control" name="serie" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Turno</label>
                        <select class="form-select" name="turno">
                            <option selected></option>
                            <option value="MANHÃ">MANHÃ</option>
                            <option value="TARDE">TARDE</option>
                            <option value="NOITE">NOITE</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-9 mb-3">
                        <label class="form-label">Instituição de Ensino</label>
                        <input class="form-control" name="instituicao" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Tipo de Instituição de Ensino</label>
                        <select class="form-select" name="tipo_instituicao">
                            <option selected></option>
                            <option value="PÚBLICA">PÚBLICA</option>
                            <option value="PRIVADA">PRIVADA</option>
                        </select>
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">DOCUMENTAÇÃO</h5>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">RG</label>
                        <input class="form-control" name="rg" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_emissor" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-5 mb-3">
                        <label class="form-label">CPF</label>
                        <input class="form-control" id="cpf" name="cpf" type="text" aria-label="" >
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS</h5>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Nome da Mãe</label>
                        <input class="form-control" name="mae" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">RG da Mãe</label>
                        <input class="form-control" name="rgmae" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor_rg_mae" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_rg_mae" type="text" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Nome do Pai</label>
                        <input class="form-control" name="pai" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">RG do Pai</label>
                        <input class="form-control" name="rgpai" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor_rg_pai" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_rg_pai" type="text" aria-label="" >
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">CONTATOS</h5>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 1</strong></label>
                        <input class="form-control" name="nome_contato1" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control" name="fone_contato1" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato1" type="text" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 2</label>
                        <input class="form-control" name="nome_contato2" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control" name="fone_contato2" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato2" type="text" aria-label="" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 3</label>
                        <input class="form-control" name="nome_contato3" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control" name="fone_contato3" type="text" aria-label="" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato3" type="text" aria-label="" >
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">DOCUMENTAÇÃO ENTREGUE</h5>

                <div class="row">
                    <div class="col-sm-4 mb-3">
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

                    <div class="col-sm-4 mb-3">
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

                    <div class="col-sm-4 mb-3">
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

                <!--Botões de submit-->
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold"></h5>
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
    </div>
</div>


@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.cpf').mask('000.000.000-00', {reverse: true});
            $('.cep').mask('00000-000');
            $('.telefone').mask('(00) 0000-0000');
            $('.celular').mask('(00) 00000-0000');
        });
    </script>
@endpush