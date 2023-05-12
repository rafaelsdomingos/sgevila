@extends('layouts.main')

@section('content')


<div class="container mt-4 mb-4 shadow bg-light p-4">
    
     <!--IDENTIFICAÇÃO DO ALUNO -->
     <h3 class="text-center h4 p-3">INFORMAÇÕES PESSOAIS</h3>

    <div class="row mb-3">
        <div class="col-sm-9">
            <label class="form-label"><strong>NOME</strong></label>
            <input class="form-control" type="text" value="{{$aluno->nome}}" aria-label="{{$aluno->nome}}" readonly>

        </div>
        <div class="col-sm-3">
            <label class="form-label"><strong>NASCIMENTO</strong></label>
            <input class="form-control" type="text" value="{{$aluno->nascimento}}" aria-label="{{$aluno->nascimento}}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-3">
            <label class="form-label"><strong>NACIONALIDADE</strong></label>
            <input class="form-control" type="text" value="{{$aluno->nacionalidade}}" aria-label="{{$aluno->nacionalidade}}" readonly>
        </div>
            
        <div class="col-sm-3">
            <label class="form-label"><strong>NATURALIDADE</strong></label>
            <input class="form-control" type="text" value="{{$aluno->naturalidade}}" aria-label="{{$aluno->naturalidade}}" readonly>
        </div>

        <div class="col-sm-3">
            <label class="form-label"><strong>SEXO</strong></label>
            <input class="form-control" type="text" value="{{$aluno->sexo}}" aria-label="{{$aluno->sexo}}" readonly>
        </div>

        <div class="col-sm-3">
            <label class="form-label"><strong>RAÇA/COR</strong></label>
            <input class="form-control" type="text" value="{{$aluno->raca}}" aria-label="{{$aluno->raca}}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-7">
            <label class="form-label"><strong>ENDEREÇO</strong></label>
            <input class="form-control" type="text" value="{{$aluno->endereco}}" aria-label="{{$aluno->endereco}}" readonly>
        </div>
        <div class="col-5">
            <label class="form-label"><strong>COMPLEMENTO</strong></label>
            <input class="form-control" type="text" value="" aria-label="" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-3 mb-3">
            <label class="form-label"><strong>BAIRRO</strong></label>
            <input class="form-control" type="text" value="{{$aluno->bairro}}" aria-label="{{$aluno->bairro}}" readonly>
        </div>

        <div class="col-sm-3">
            <label class="form-label"><strong>CIDADE</strong></label>
            <input class="form-control" type="text" value="{{$aluno->cidade}}" aria-label="{{$aluno->cidade}}" readonly>
        </div>

        <div class="col-sm-1">
            <label class="form-label"><strong>UF</strong></label>
            <input class="form-control" type="text" value="{{$aluno->uf}}" aria-label="{{$aluno->uf}}" readonly>
        </div>

        <div class="col-sm-2">
            <label class="form-label"><strong>CEP</strong></label>
            <input class="form-control" type="text" value="{{$aluno->cep}}" aria-label="{{$aluno->cep}}" readonly>
        </div>

        <div class="col-sm-3">
            <label class="form-label"><strong>REGIONAL</strong></label>
            <input class="form-control" type="text" value="{{$aluno->regional}}" aria-label="{{$aluno->regional}}" readonly>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <strong>Possui algum tipo de deficiência?</strong>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Sim
                </label>
            </div>

            <div class="form-check">

                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <label class="form-label"><strong>Se sim, qual seria?</strong></label>
            <input class="form-control" type="text" value="{{$aluno->tipo_deficiencia}}" aria-label="{{$aluno->tipo_deficiencia}}" readonly>
        </div>
    </div>



    <div class="row mb-3">
        <div class="col-sm-12">
            <strong>Possui algum tipo de alergia?</strong>
            
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Sim
                </label>
            </div>

            <div class="form-check">

                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Não
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <label class="form-label"><strong>Se sim, especificar os alimentos/medicamentos que podem ocasionar uma reação alérgica.</strong></label>
            <input class="form-control" type="text" value="{{$aluno->tipo_alergia}}" aria-label="{{$aluno->tipo_alergia}}" readonly>
        </div>
    </div>


       
    <!--IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS -->
    <h3 class="text-center h4 mt-5 mb-4">IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS</h3>

    <div class="row mb-3">
        <div class="col-sm-6">
            <label class="form-label"><strong>MÃE</strong></label>
            <input class="form-control" type="text" value="{{$aluno->mae}}" aria-label="{{$aluno->mae}}" readonly>

        </div>
        <div class="col-sm-3">
            <label class="form-label"><strong>RG</strong></label>
            <input class="form-control" type="text" value="{{$aluno->rgmae}}" aria-label="{{$aluno->rgmae}}" readonly>
        </div>

        <div class="col-sm-2">
            <label class="form-label"><strong>EMISSOR</strong></label>
            <input class="form-control" type="text" value="{{$aluno->emissor_rg_mae}}" aria-label="{{$aluno->emissor_rg_mae}}" readonly>
        </div>

        <div class="col-sm-1">
            <label class="form-label"><strong>UF</strong></label>
            <input class="form-control" type="text" value="{{$aluno->uf_rg_mae}}" aria-label="{{$aluno->uf_rg_mae}}" readonly>
        </div>
    </div>



    <div class="row mb-3">
        <div class="col-sm-6">
            <label class="form-label"><strong>PAI</strong></label>
            <input class="form-control" type="text" value="{{$aluno->pai}}" aria-label="{{$aluno->pai}}" readonly>

        </div>
        <div class="col-sm-3">
            <label class="form-label"><strong>RG</strong></label>
            <input class="form-control" type="text" value="{{$aluno->rgpai}}" aria-label="{{$aluno->rgpai}}" readonly>
        </div>

        <div class="col-sm-2">
            <label class="form-label"><strong>EMISSOR</strong></label>
            <input class="form-control" type="text" value="{{$aluno->emissor_rg_pai}}" aria-label="{{$aluno->emissor_rg_pai}}" readonly>
        </div>

        <div class="col-sm-1">
            <label class="form-label"><strong>UF</strong></label>
            <input class="form-control" type="text" value="{{$aluno->uf_rg_pai}}" aria-label="{{$aluno->uf_rg_pai}}" readonly>
        </div>
    </div>



    <h3 class="text-center h4 mt-5 mb-4">LISTA DE CONTATOS</h3>

    <div class="row mb-3">
        <div class="col-sm-6">
            <label class="form-label"><strong>NOME</strong></label>
            <input class="form-control" type="text" value="{{$aluno->nome_contato1}}" aria-label="{{$aluno->nome_contato1}}" readonly>

        </div>
        <div class="col-sm-2">
            <label class="form-label"><strong>FONE</strong></label>
            <input class="form-control" type="text" value="{{$aluno->fone_contato1}}" aria-label="{{$aluno->fone_contato1}}" readonly>
        </div>
        <div class="col-sm-4">
            <label class="form-label"><strong>EMAIL</strong></label>
            <input class="form-control" type="text" value="{{$aluno->email_contato1}}" aria-label="{{$aluno->email_contato1}}" readonly>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-sm-6">
            <label class="form-label"><strong>NOME</strong></label>
            <input class="form-control" type="text" value="{{$aluno->nome_contato2}}" aria-label="{{$aluno->nome_contato2}}" readonly>

        </div>
        <div class="col-sm-2">
            <label class="form-label"><strong>FONE</strong></label>
            <input class="form-control" type="text" value="{{$aluno->fone_contato2}}" aria-label="{{$aluno->fone_contato2}}" readonly>
        </div>
        <div class="col-sm-4">
            <label class="form-label"><strong>EMAIL</strong></label>
            <input class="form-control" type="text" value="{{$aluno->email_contato2}}" aria-label="{{$aluno->email_contato2}}" readonly>
        </div>
    </div>


    <div class="row mb-3">
        <div class="col-sm-6">
            <label class="form-label"><strong>NOME</strong></label>
            <input class="form-control" type="text" value="{{$aluno->nome_contato3}}" aria-label="{{$aluno->nome_contato3}}" readonly>

        </div>
        <div class="col-sm-2">
            <label class="form-label"><strong>FONE</strong></label>
            <input class="form-control" type="text" value="{{$aluno->fone_contato3}}" aria-label="{{$aluno->fone_contato3}}" readonly>
        </div>
        <div class="col-sm-4">
            <label class="form-label"><strong>EMAIL</strong></label>
            <input class="form-control" type="text" value="{{$aluno->email_contato3}}" aria-label="{{$aluno->email_contato3}}" readonly>
        </div>
    </div>

</div>


@endsection