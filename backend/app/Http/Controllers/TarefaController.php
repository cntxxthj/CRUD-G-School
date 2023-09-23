<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefaController extends Controller{
    public function index(){
        $tarefa=Tarefa::all();
        return response()->json($tarefa);
    }

    public function show($id){
        $tarefa=Tarefa::find($id);
        return response()->json($tarefa);
    }

    public function store(Request $request){
        $tarefa = new Tarefa;
        $tarefa->titulo = $request->titulo;
        $tarefa->descricao = $request->descricao;
        $tarefa->data_vencimento = $request->data_vencimento;
        $tarefa->status = $request->status;
        $tarefa->save();

        return response()->json(['message' => 'Tarefa criada com sucesso'], 201);
    }

    public function update(Request $request, $id){
        $tarefa = Tarefa::find($id);
        $tarefa->titulo = $request->titulo;
        $tarefa->descricao = $request->descricao;
        $tarefa->data_vencimento = $request->data_vencimento;
        $tarefa->status = $request->status;
        $tarefa->save();

        return response()->json(['message' => 'Tarefa atualizada com sucesso'], 201);
    }

    public function destroy($id){
        $tarefa = Tarefa::find($id);
        if (!$tarefa){
            return response()->json(['message' => 'Tarefa não encontrada'],404);
        }
        $tarefa->delete();
        return response()->json(['message' => 'Tarefa deletada com sucesso'], 201);
    }
}