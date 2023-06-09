<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateCoordenacaoFormRequest;
use App\Models\Coordenacao;
use Illuminate\Http\Request;

class CoordenacaoController extends Controller
{
    public function index(){
        $coordenacoes = Coordenacao::all();
        return view('coordenacoes.index', [
            'coordenacoes'=>$coordenacoes,
        ]);
    }
    
    public function show(Coordenacao $coordenacao){
        $coordenacao->load('cursos');
        return view('coordenacoes.show', [
            'coordenacao'=>$coordenacao,
        ]);
    }

    public function create(){
        return view('coordenacoes.create');
    }

    public function store(StoreUpdateCoordenacaoFormRequest $request){
        $data = $request->all();
        $coordenacao = Coordenacao::create($data);

        return redirect()->route('coordenacoes.index');
    }

    public function edit(Coordenacao $coordenacao){
        return view('coordenacoes.edit', [
            'coordenacao'=>$coordenacao,
        ]);
    }

    public function update(StoreUpdateCoordenacaoFormRequest $request, $id){
        if (!$coordenacao = Coordenacao::find($id)){
            return redirect()->route('coordenacoes.index');
        }
        $coordenacao->update($request->all());
        return redirect()->route('coordenacoes.index');
    }

    public function destroy($id){
        if (!$coordenacao = Coordenacao::find($id)){
            return redirect()->route('coordenacoes.index');
        }
        $coordenacao->delete();
        return redirect()->route('coordenacoes.index');

    }
}
