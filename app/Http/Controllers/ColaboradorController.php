<?php

namespace App\Http\Controllers;

use App\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::all();
        return view('colaboradores.main', ['colaboradores' => $colaboradores]);
    }

    public function show($id)
    {
        $colaborador = Colaborador::where('sequencia', $id);
        return view('colaboradores.show', ['colaborador', $colaborador]);
    }

    public function edit($id)
    {
        $colaborador = Colaborador::where('sequencia', $id);
        return view('colaboradores.edit', ['colaborador', $colaborador]);
    }

    public function store(Request $request)
    {
        Colaborador::create($request->all());
        return response()->json(['msg' => 'Colaborador inserido com sucesso']);
    }

    public function update(Request $request, $id)
    {
        $colaborador = Colaborador::where('sequencia', $id);
        $colaborador->update($request->all());
        return response()->json(['msg' => 'Atualizado com sucesso!']);
    }

    public function delete($id)
    {
        Colaborador::delete($id);
        return response()->json(['msg' => 'Excluido com sucesso']);
    }
}
