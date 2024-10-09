<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Historico;

class historicoController extends Controller
{
    public function index(){
        return view('/historico');
    }
    // Método para exibir o histórico de pesquisas do usuário
  /*  public function armazenar(Request $request)
{
    $request->validate([
        'consulta' => 'required|string|max:255',
    ]);

    HistoricoPesquisa::create([
        'consulta' => $request->consulta,
        'usuario_id' => Auth::id(), // Associa a pesquisa ao usuário autenticado
    ]);

    return response()->json(['success' => true]);
}*/

public function listar()
    {
        $historicos = Historico::where('usuario_id', Auth::id())->get(); // Filtra pelo usuário autenticado
        return view('historico', compact('historicos'));
    }
}
