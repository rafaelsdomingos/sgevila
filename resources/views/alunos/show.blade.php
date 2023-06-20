@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title fw-semibold"></h5>
            <div>
                <a href="{{url()->previous()}}" class="btn btn-secondary">
                    <i class="ti ti-arrow-left"></i>
                    Voltar
                </a>

                <a href="{{route('alunos.edit', $aluno->id)}}" class="btn btn-warning">
                    <i class="ti ti-pencil"></i>
                    Editar
                </a>
            </div>
        </div>
        <div class="card-body">

            <h5 class="card-title text-center my-3">DADOS PESSOAIS</h5>
            
                        
            <form method="POST" action="{{route('alunos.destroy', $aluno->id)}}">
                @method('DELETE')
                @csrf
                <div class="row">
                    <div class="col-md-10 mb-3">
                        <label class="form-label">Nome Completo</label>
                        <input class="form-control" name="nome" type="text" value="{{$aluno->nome}}" aria-label="" disabled>
                      
                    </div>
                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Nascimento</label>
                        <input class="form-control" name="nascimento" type="date" value="{{$aluno->nascimento}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Nacionalidade</label>
                        <input class="form-control" name="nacionalidade" type="text" value="{{$aluno->nacionalidade}}" aria-label="" disabled>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Naturalidade</label>
                        <input class="form-control" name="naturalidade" type="text" value="{{$aluno->naturalidade}}" aria-label="" disabled>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Sexo</label>
                        <select class="form-select" aria-label="Sexo" name="sexo" disabled>
                            <option></option>
                            <option value="FEMININO" {{$aluno->sexo == "FEMININO" ? 'selected' : ''}}>FEMININO</option>
                            <option value="MASCULINO" {{$aluno->sexo == "MASCULINO" ? 'selected' : ''}}>MASCULINO</option>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Cor / Raça</label>
                        <input class="form-control" name="raca" type="text" value="{{$aluno->raca}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Endereço</label>
                        <input class="form-control" name="endereco" type="text" value="{{$aluno->endereco}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Bairro</label>
                        <input class="form-control" name="bairro" type="text" value="{{$aluno->bairro}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Cidade</label>
                        <input class="form-control" name="cidade" type="text" value="{{$aluno->cidade}}" aria-label="" disabled >
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf" type="text" value="{{$aluno->uf}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">CEP</label>
                        <input class="form-control" name="cep" type="text" value="{{$aluno->cep}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">SER</label>
                        <input class="form-control" name="regional" type="text" value="{{$aluno->regional}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Contato 1</label>
                        <input class="form-control telefone" name="fone1" type="text" value="{{$aluno->fone1}}" aria-label="" disabled>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Contato 2</label>
                        <input class="form-control telefone" name="fone2" type="text" value="{{$aluno->fone2}}" aria-label="" disabled>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="email" value="{{$aluno->email}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Possui alguma necessidade especial?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="deficienciaRadio1" value="1" {{$aluno->deficiencia == 1 ? 'checked' : ''}} disabled>
                                <label class="form-check-label" for="deficienciaRadio1">SIM</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deficiencia" id="deficienciaRadio2" value="0" {{$aluno->deficiencia == 0 ? 'checked' : ''}} disabled>
                                <label class="form-check-label" for="deficienciaRadio2">NÃO</label>
                            </div>
                            <br><br><label class="form-label">Se sim, qual seria?</strong></label>
                            <input class="form-control" name="tipo_deficiencia" type="text" aria-label="" value="{{$aluno->tipo_deficiencia}}" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <label class="form-label">Possui alguma alergia?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alergia" id="alergiaRadio1" value="1" {{$aluno->alergia == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="alergiaRadio1">SIM</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="alergia" id="alergiaRadio2" value="0" {{$aluno->alergia == 0 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="alergiaRadio2">NÃO</label>
                        </div>
                        <br><br><label class="form-label">Se sim, qual seria?</label>
                        <input class="form-control" name="tipo_alergia" type="text" aria-label="" value="{{$aluno->tipo_alergia}}" disabled>
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">ESCOLARIDADE</h5>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Escolaridade</label>
                        
                        
                        <select class="form-select" name="escolaridade" disabled>
                            <option ></option>
                            <option value="ENSINO FUNDAMENTAL INCOMPLETO" {{$aluno->escolaridade === "ENSINO FUNDAMENTAL INCOMPLETO" ? 'selected' : ''}}>ENSINO FUNDAMENTAL INCOMPLETO</option>
                            <option value="ENSINO FUNDAMENTAL" {{$aluno->escolaridade === "ENSINO FUNDAMENTAL" ? 'selected' : ''}}>ENSINO FUNDAMENTAL</option>
                            <option value="ENSINO MÉDIO INCOMPLETO" {{$aluno->escolaridade === "ENSINO MÉDIO INCOMPLETO" ? 'selected' : ''}}>ENSINO MÉDIO INCOMPLETO</option>
                            <option value="ENSINO MÉDIO" {{$aluno->escolaridade === "ENSINO MÉDIO" ? 'selected' : ''}}>ENSINO MÉDIO</option>
                            <option value="ENSINO SUPERIOR INCOMPLETO" {{$aluno->escolaridade === "ENSINO SUPERIOR INCOMPLETO" ? 'selected' : ''}}>ENSINO SUPERIOR INCOMPLETO</option>
                            <option value="ENSINO SUPERIOR" {{$aluno->escolaridade === "ENSINO SUPERIOR" ? 'selected' : ''}}>ENSINO SUPERIOR</option>
                        </select>
                        

                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Série</label>
                        <input class="form-control" name="serie" type="text" value="{{$aluno->serie}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Turno</label>
                        <select class="form-select" name="turno" disabled>
                            <option selected></option>
                            <option value="MANHÃ" {{$aluno->turno == "MANHÃ" ? 'selected' : ''}}>MANHÃ</option>
                            <option value="TARDE" {{$aluno->turno == "TARDE" ? 'selected' : ''}}>TARDE</option>
                            <option value="NOITE" {{$aluno->turno == "NOITE" ? 'selected' : ''}}>NOITE</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-9 mb-3">
                        <label class="form-label">Instituição de Ensino</label>
                        <input class="form-control" name="instituicao" type="text" value="{{$aluno->instituicao}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Tipo de Instituição de Ensino</label>
                        <select class="form-select" name="tipo_instituicao" disabled>
                            <option selected></option>
                            <option value="PÚBLICA" {{$aluno->tipo_instituicao == "PÚBLICA" ? 'selected' : ''}}>PÚBLICA</option>
                            <option value="PRIVADA" {{$aluno->tipo_instituicao == "PRIVADA" ? 'selected' : ''}}>PRIVADA</option>
                        </select>
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">DOCUMENTAÇÃO</h5>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <label class="form-label">RG</label>
                        <input class="form-control" name="rg" type="text" value="{{$aluno->rg}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor" type="text" value="{{$aluno->emissor}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_emissor" type="text" value="{{$aluno->uf_emissor}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-5 mb-3">
                        <label class="form-label">CPF</label>
                        <input class="form-control" name="cpf" type="text" value="{{$aluno->cpf}}" aria-label="" disabled>
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS</h5>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Nome da Mãe</label>
                        <input class="form-control" name="mae" type="text" value="{{$aluno->mae}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">RG da Mãe</label>
                        <input class="form-control" name="rgmae" type="text" value="{{$aluno->rgmae}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor_rg_mae" type="text" value="{{$aluno->emissor_rg_mae}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_rg_mae" type="text" value="{{$aluno->uf_rg_mae}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label class="form-label">Nome do Pai</label>
                        <input class="form-control" name="pai" type="text" value="{{$aluno->pai}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">RG do Pai</label>
                        <input class="form-control" name="rgpai" type="text" value="{{$aluno->rgpai}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-2 mb-3">
                        <label class="form-label">Emissor</label>
                        <input class="form-control" name="emissor_rg_pai" type="text" value="{{$aluno->emissor_rg_pai}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-1 mb-3">
                        <label class="form-label">UF</label>
                        <input class="form-control" name="uf_rg_pai" type="text" value="{{$aluno->uf_rg_pai}}" aria-label="" disabled>
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">CONTATOS</h5>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 1</strong></label>
                        <input class="form-control" name="nome_contato1" type="text" value="{{$aluno->nome_contato1}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Fone</label>
                        <input class="form-control" name="fone_contato1" type="text" value="{{$aluno->fone_contato1}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato1" type="text" value="{{$aluno->email_contato1}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 2</label>
                        <input class="form-control" name="nome_contato2" type="text" value="{{$aluno->nome_contato2}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Fone</label>
                        <input class="form-control" name="fone_contato2" type="text" value="{{$aluno->fone_contato2}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato2" type="text" value="{{$aluno->email_contato2}}" aria-label="" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <label class="form-label">Nome Contato 3</label>
                        <input class="form-control" name="nome_contato3" type="text" value="{{$aluno->nome_contato3}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-3 mb-3">
                        <label class="form-label">Fone</label>
                        <input class="form-control" name="fone_contato3" type="text" value="{{$aluno->fone_contato3}}" aria-label="" disabled>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email_contato3" type="text" value="{{$aluno->email_contato3}}" aria-label="" disabled>
                    </div>
                </div>

                <hr class="border border-primary border-2 opacity-75 my-4">
                <h5 class="card-title text-center my-3">DOCUMENTAÇÃO ENTREGUE</h5>

                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="comp_endereco" id="comp_endereco" {{$aluno->comp_endereco == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="comp_endereco">
                              COMPROVANTE DE ENDEREÇO (CÓPIA)
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="dec_matricula" id="dec_matricula" {{$aluno->dec_matricula == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="dec_matricula">
                              DECLARAÇÃO DE MATRÍCULA
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="atestado" id="atestado" {{$aluno->atestado == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="atestado">
                              ATESTADO MÉDICO
                            </label>
                        </div>

                    </div>

                    <div class="col-sm-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="renda" id="renda" {{$aluno->renda == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="renda">
                                COMPROVANTE DE RENDA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="certidao" id="certidao" {{$aluno->certidao == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="certidao">
                                CERTIDÃO DE NASCIMENTO
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="foto" id="foto" {{$aluno->foto == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="foto">
                              FOTO 3X4
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="rg_responsavel" id="rg_responsavel" {{$aluno->rg_responsavel == 1 ? 'checked' : ''}} disabled>
                            <label class="form-check-label" for="rg_responsavel">
                              RG DO RESPONSÁVEL (CÓPIA)
                            </label>
                        </div>
                    </div>
                </div>

                <!--Botões de Voltar, Editar e Deletar-->
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title fw-semibold"></h5>
                    <div>
                        <a href="{{url()->previous()}}" class="btn btn-secondary">
                            <i class="ti ti-arrow-left"></i>
                            Voltar
                        </a>
        
                        <a href="{{route('alunos.edit', $aluno->id)}}" class="btn btn-warning">
                            <i class="ti ti-pencil"></i>
                            Editar
                        </a>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarAluno">
                            <i class="ti ti-trash"></i>
                            Deletar
                        </button>
                    </div>
                </div>

                <!--Modal para Salvar -->
                <div class="modal fade" id="deletarAluno" tabindex="-1" aria-labelledby="deletarAluno" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title fs-5" id="deletarAlunoLabel"><strong>Deletar Aluno</strong></h6>
                            </div>
                            <div class="modal-body">
                                Deseja realmente excluir <strong>{{$aluno->nome}}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            


        </div>
    </div>
</div>

@endsection