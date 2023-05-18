@extends('layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Novo Aluno</h5>
            
            <div>
                <a href="{{route('alunos.index')}}" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>
        </div>

        <div class="card-body">

             <!--IDENTIFICAÇÃO DO ALUNO -->
            <h3 class="text-center h4 p-3">INFORMAÇÕES PESSOAIS</h3>

            <div class="row mb-3">
                <div class="col-sm-9">
                    <label class="form-label"><strong>NOME</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
        
                </div>
                <div class="col-sm-3">
                    <label class="form-label"><strong>NASCIMENTO</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-sm-3">
                    <label class="form-label"><strong>NACIONALIDADE</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
                    
                <div class="col-sm-3">
                    <label class="form-label"><strong>NATURALIDADE</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-3">
                    <label class="form-label"><strong>SEXO</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-3">
                    <label class="form-label"><strong>RAÇA/COR</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-7">
                    <label class="form-label"><strong>ENDEREÇO</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
                <div class="col-5">
                    <label class="form-label"><strong>COMPLEMENTO</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-sm-3 mb-3">
                    <label class="form-label"><strong>BAIRRO</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-3">
                    <label class="form-label"><strong>CIDADE</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-1">
                    <label class="form-label"><strong>UF</strong></label>
                    <input class="form-control" type="text" value="" aria-label="">
                </div>
        
                <div class="col-sm-2">
                    <label class="form-label"><strong>CEP</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-3">
                    <label class="form-label"><strong>REGIONAL</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
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
                    <input class="form-control" type="text" value="" aria-label="" >
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
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>

            <!--IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS -->
            <h3 class="text-center h4 mt-5 mb-4">IDENTIFICAÇÃO DOS PAIS / RESPONSÁVEIS</h3>

            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="form-label"><strong>MÃE</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
        
                </div>
                <div class="col-sm-3">
                    <label class="form-label"><strong>RG</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-2">
                    <label class="form-label"><strong>EMISSOR</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-1">
                    <label class="form-label"><strong>UF</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="form-label"><strong>PAI</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
        
                </div>
                <div class="col-sm-3">
                    <label class="form-label"><strong>RG</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-2">
                    <label class="form-label"><strong>EMISSOR</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
        
                <div class="col-sm-1">
                    <label class="form-label"><strong>UF</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
            <h3 class="text-center h4 mt-5 mb-4">LISTA DE CONTATOS</h3>

            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="form-label"><strong>NOME</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
        
                </div>
                <div class="col-sm-2">
                    <label class="form-label"><strong>FONE</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
                <div class="col-sm-4">
                    <label class="form-label"><strong>EMAIL</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="form-label"><strong>NOME</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
        
                </div>
                <div class="col-sm-2">
                    <label class="form-label"><strong>FONE</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
                <div class="col-sm-4">
                    <label class="form-label"><strong>EMAIL</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="form-label"><strong>NOME</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
        
                </div>
                <div class="col-sm-2">
                    <label class="form-label"><strong>FONE</strong></label>
                    <input class="form-control" type="text" value="" aria-label="">
                </div>
                <div class="col-sm-4">
                    <label class="form-label"><strong>EMAIL</strong></label>
                    <input class="form-control" type="text" value="" aria-label="" >
                </div>
            </div>
 
        <!-- Final do Corpo do Cartão -->
        </div>
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            
            <div>
                <a href="/alunos" class="btn btn-success">
                    <i class="fas fa-arrow-left"></i>
                    Voltar
                </a>
            </div>


            <div>
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-save"></i>
                    Salvar
                </button>
            </div>
        </div>
    <!-- Final do Cartão -->
    </div>

<!-- End Page Content -->
</div>

@endsection