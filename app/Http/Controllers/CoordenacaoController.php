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
}
