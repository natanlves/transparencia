<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class historicoController extends Controller
{
    // Método para exibir o histórico de pesquisas do usuário
    public function mostrarHistorico()
    {
        // Obtém o usuário autenticado
        $user = Auth::user();
        
        // Recupera o histórico de pesquisas desse usuário
        $mostrarHistorico = $user->mostrarHistorico()->orderBy('created_at', 'desc')->get();

        // Retorna a view com o histórico de pesquisas
        return view('historico', compact('mostrarHistorico'));
    }
}
