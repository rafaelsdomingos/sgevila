<div>
    <form method="GET" action="{{route('frequencias.listar')}}">
        @csrf
        <div class="col-sm-6 mb-3">
            <label class="form-label">CURSO</label>
            <select class="form-select" 
                wire:model="cursoId"
                wire:change="filtrarEtapaPeloCurso"
                name="curso_id"
            >
                <option>Selecione um curso...</option>
                @foreach ($curso->all() as $curso)
                <option value="{{$curso->id}}">{{$curso->nome}}</option>
                @endforeach
            </select>
        </div>

        @if ($etapas)
        <div class="col-sm-6 mb-3">
            <label class="form-label">ETAPA</label>
            <select class="form-select" name="etapa_id" wire:model="etapaId" wire:change="filtrarTurmaPelaEtapa">
                <option>Selecione uma turma...</option>
                @foreach ($etapas as $etapa)
                <option value="{{$etapa->id}}">{{$etapa->nome}}</option>
                @endforeach
            </select>
        </div>
        @endif

        @if ($turmas)
        <div class="col-sm-6 mb-3">
            <label class="form-label">TURMA</label>
            <select class="form-select" name="turma_id" wire:model="turmaId" wire:change="filtrarModuloPelaTurma">
                <option>Selecione uma turma...</option>
                @foreach ($turmas as $turma)
                <option value="{{$turma->id}}">{{$turma->ano_letivo}} - {{$turma->nome}}</option>
                @endforeach
            </select>
        </div>
        @endif

        @if ($modulos)
        <div class="col-sm-6 mb-3">
            <label class="form-label">MÓDULO</label>
            <select class="form-select" wire:model="moduloId" name="modulo_id">
                <option>Selecione uma turma...</option>
                @foreach ($modulos as $modulo)
                <option value="{{$modulo->id}}">{{$modulo->nome}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-6 mb-3">
            <label class="form-label">MÊS</label>
            <select class="form-select" name="mes">
                <option value="JANEIRO">JANEIRO</option>
                <option value="FEVEREIRO">FEVEREIRO</option>
                <option value="MARÇO">MARÇO</option>
                <option value="ABRIL">ABRIL</option>
                <option value="MAIO">MAIO</option>
                <option value="JUNHO">JUNHO</option>
                <option value="JULHO">JULHO</option>
                <option value="AGOSTO">AGOSTO</option>
                <option value="SETEMBRO">SETEMBRO</option>
                <option value="OUTUBRO">OUTUBRO</option>
                <option value="NOVEMBRO">NOVEMBRO</option>
                <option value="DEZEMBRO">DEZEMBRO</option>
            </select>
        </div>

        <button type="submit">Buscar Frequencia</button>
        @endif

        

    </form>
</div>
