<?php

namespace App\Http\Controllers;

use App\Models\Modulo;
use App\Models\Turma;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($modulo_id, $turma_id)
    {
        if ((!$turma = Turma::find($turma_id)) || (!$modulo = Modulo::find($modulo_id)) ){
            return redirect()->route('turmas.index');
        }

        return view('modulos.show', compact('modulo', 'turma'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modulo $modulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modulo $modulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modulo $modulo)
    {
        //
    }
}
