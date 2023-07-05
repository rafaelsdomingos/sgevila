@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold">Cadastro de Alunos</h5>
            <div>
                <a href="{{route('alunos.index')}}" class="btn btn-primary">
                    <i class="ti ti-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>
        <div class="card-body">

            <h5 class="card-title text-center my-3">DADOS PESSOAIS</h5>           
                        
            <form method="POST" action="{{route('alunos.store')}}" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome Completo</label>
                        <input class="form-control" name="nome" type="text" value="" aria-label="Nome Completo" required>
                        <div class="invalid-feedback">Você deve informar o nome do novo aluno.</div>
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Nascimento</label>
                        <input class="form-control" name="nascimento" type="date" value="" aria-label="Nascimento" required>
                        <div class="invalid-feedback">Data inválida.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Nacionalidade</label>
                        <input class="form-control" name="nacionalidade" type="text" value="" aria-label="Nacionalidade" >
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Naturalidade</label>
                        <input class="form-control" name="naturalidade" type="text" value="" aria-label="Naturalidade" >
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Sexo</label>
                        <select class="form-select" aria-label="Sexo" name="sexo" required>
                            <option ></option>
                            <option value="FEMININO">FEMININO</option>
                            <option value="MASCULINO">MASCULINO</option>
                        </select>
                        <div class="invalid-feedback">O sexo deve ser informado.</div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Cor / Raça</label>
                        <input class="form-control" name="raca" type="text" value="" aria-label="Cor / Raça" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Endereço</label>
                        <input class="form-control" name="endereco" type="text" aria-label="Endereço" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Bairro</label>
                        <input class="form-control" name="bairro" type="text" aria-label="Bairro" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Cidade</label>
                        <input class="form-control" name="cidade" type="text" aria-label="Cidade" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf" type="text" aria-label="UF" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">CEP</label>
                        <input class="form-control cep" name="cep" type="text" aria-label="CEP" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">SER</label>
                        <input class="form-control" name="regional" type="text" aria-label="SER" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control celular" name="fone1" type="text" aria-label="Celular" >
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Telefone</label>
                        <input class="form-control telefone" name="fone2" type="text" aria-label="Telefone" >
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="email" aria-label="Email" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Possui alguma necessidade especial?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="defRadio1" value="1">
                                <label class="form-check-label" for="defRadio1">SIM</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="defRadio2" value="0">
                                <label class="form-check-label" for="defRadio2">NÃO</label>
                            </div>
                            <br><br><label class="form-label">Se sim, qual seria?</strong></label>
                            <input class="form-control" name="tipo_deficiencia" type="text" aria-label="Se sim, qual seria?" >
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
                        <input class="form-control" name="tipo_alergia" type="text" aria-label="Se sim, qual seria?" >
                    </div>
                </div>

                <hr class="border border-dark border-1 opacity-50 my-4">
                <h5 class="card-title text-center my-4">ESCOLARIDADE</h5>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Escolaridade</label>
                        <select class="form-select" name="escolaridade" required>
                            <option></option>
                            <option value="ENSINO FUNDAMENTAL INCOMPLETO">ENSINO FUNDAMENTAL INCOMPLETO</option>
                            <option value="ENSINO FUNDAMENTAL">ENSINO FUNDAMENTAL</option>
                            <option value="ENSINO MÉDIO INCOMPLETO">ENSINO MÉDIO INCOMPLETO</option>
                            <option value="ENSINO MÉDIO">ENSINO MÉDIO</option>
                            <option value="ENSINO SUPERIOR INCOMPLETO">ENSINO SUPERIOR INCOMPLETO</option>
                            <option value="ENSINO SUPERIOR">ENSINO SUPERIOR</option>
                        </select>
                        <div class="invalid-feedback">Você deve informar a escolaridade</div>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Série</label>
                        <input class="form-control" name="serie" type="text" aria-label="Série" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Turno</label>
                        <select class="form-select" name="turno">
                            <option ></option>
                            <option value="MANHÃ">MANHÃ</option>
                            <option value="TARDE">TARDE</option>
                            <option value="NOITE">NOITE</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-9 mb-3">
                        <label class="form-label">Instituição de Ensino</label>
                        <input class="form-control" name="instituicao" type="text" aria-label="Instituição de Ensino" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Tipo de Instituição de Ensino</label>
                        <select class="form-select" name="tipo_instituicao">
                            <option></option>
                            <option value="PÚBLICA">PÚBLICA</option>
                            <option value="PRIVADA">PRIVADA</option>
                        </select>
                    </div>
                </div>

                <hr class="border border-dark border-1 opacity-50 my-4">
                <h5 class="card-title text-center my-4">DOCUMENTAÇÃO</h5>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">RG</label>
                        <input class="form-control" name="rg" type="text" aria-label="RG" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor" type="text" aria-label="Emissor" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_emissor" type="text" aria-label="UF" >
                    </div>

                    <div class="col-sm-5 mb-3">
                        <label class="form-label">CPF</label>
                        <input class="form-control cpf" name="cpf" type="text" aria-label="CPF" >
                    </div>
                </div>

                <hr class="border border-dark border-1 opacity-50 my-4">
                <h5 class="card-title text-center my-4">IDENTIFICAÇÃO DO PAIS / RESPONSÁVEIS</h5>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Nome da Mãe</label>
                        <input class="form-control" name="mae" type="text" aria-label="Nome da Mãe" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">RG da Mãe</label>
                        <input class="form-control" name="rgmae" type="text" aria-label="RG da Mãe" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor_rg_mae" type="text" aria-label="Emissor" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_rg_mae" type="text" aria-label="UF" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Nome do Pai</label>
                        <input class="form-control" name="pai" type="text" aria-label="Nome do Pai" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">RG do Pai</label>
                        <input class="form-control" name="rgpai" type="text" aria-label="RG do Pai" >
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor_rg_pai" type="text" aria-label="Emissor" >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_rg_pai" type="text" aria-label="UF" >
                    </div>
                </div>

                <hr class="border border-dark border-1 opacity-50 my-4">
                <h5 class="card-title text-center my-4">CONTATOS</h5>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 1</strong></label>
                        <input class="form-control" name="nome_contato1" type="text" aria-label="Nome Contato 1" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control celular" name="fone_contato1" type="text" aria-label="Celular" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato1" type="text" aria-label="Email" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 2</label>
                        <input class="form-control" name="nome_contato2" type="text" aria-label="Nome Contato 2" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control celular" name="fone_contato2" type="text" aria-label="Celular" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato2" type="text" aria-label="Email" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 3</label>
                        <input class="form-control" name="nome_contato3" type="text" aria-label="Nome Contato 3" >
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Celular</label>
                        <input class="form-control celular" name="fone_contato3" type="text" aria-label="Celular" >
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato3" type="text" aria-label="Email" >
                    </div>
                </div>

                <hr class="border border-dark border-1 opacity-50 my-4">
                <h5 class="card-title text-center my-4">DOCUMENTAÇÃO ENTREGUE</h5>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comp_endereco" id="comp_endereco">
                            <label class="form-check-label" for="comp_endereco">
                              COMPROVANTE DE ENDEREÇO (CÓPIA)
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="dec_matricula" id="dec_matricula">
                            <label class="form-check-label" for="dec_matricula">
                              DECLARAÇÃO DE MATRÍCULA
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="atestado" id="atestado">
                            <label class="form-check-label" for="atestado">
                              ATESTADO MÉDICO
                            </label>
                        </div>

                    </div>

                    <div class="col-sm-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="renda" id="renda">
                            <label class="form-check-label" for="renda">
                                COMPROVANTE DE RENDA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="certidao" id="certidao">
                            <label class="form-check-label" for="certidao">
                                CERTIDÃO DE NASCIMENTO
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="foto" id="foto">
                            <label class="form-check-label" for="foto">
                              FOTO 3X4
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="rg_responsavel" id="rg_responsavel">
                            <label class="form-check-label" for="rg_responsavel">
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
                            <i class="ti ti-arrow-left"></i>
                            Limpar
                        </button>
                        <button type="submit" class="btn btn-success">
                            <i class="ti ti-plus"></i>Salvar
                        </button>

                        <!--
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#salvarAluno">
                            <i class="ti ti-save"></i>
                            Salvar
                        </button>
                        -->

                    </div>
                </div>

                <!--Modal para Salvar -->
                <div class="modal fade" id="salvarAluno" tabindex="-1" aria-labelledby="salvarAluno" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="salvarAlunoLabel"><strong>Salvar novo Aluno</strong></h6>
                            </div>
                            <div class="modal-body">
                                Deseja salvar o novo Aluno?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="ti ti-cancel"></i>Cancelar</button>
                                <button type="submit" class="btn btn-success"><i class="ti ti-save"></i>Salvar</button>
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
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('js/masks.js')}}"></script>
    <script src="{{asset('js/form.validation.js')}}"></script>
@endpush