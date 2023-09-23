<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtarefa;

class SubtarefaController extends Controller{
    public function index(){
        $subtarefa=Subtarefa::all();
        return response()->json($subtarefa);
    }

    public function show($id){
        $subtarefa=Subtarefa::find($id);
        return response()->json($subtarefa);
    }

    public function store(Request $request){
        $subtarefa = new Subtarefa;
        $subtarefa->titulo = $request->titulo;
        $subtarefa->descricao = $request->descricao;
        $subtarefa->id_tarefas = $request->id_tarefas;
        $subtarefa->status = $request->status;
        $subtarefa->save();

        return response()->json(['message' => 'Subtarefa criada com sucesso'], 201);
    }

    public function update(Request $request, $id)
    {
        $subtarefa = Subtarefa::find($id);
        $subtarefa->titulo = $request->titulo;
        $subtarefa->descricao = $request->descricao;
        $subtarefa->id_tarefas = $request->id_tarefas;
        $subtarefa->status = $request->status;
        $subtarefa->save();

        return response()->json(['message' => 'Subtarefa atualizada com sucesso'], 201);
    }

    public function destroy($id)
    {
        $subtarefa = Subtarefa::find($id);
        $subtarefa->delete();

        return response()->json(['message' => 'Subtarefa deletada com sucesso'], 201);
    }
}