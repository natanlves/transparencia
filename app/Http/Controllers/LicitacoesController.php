<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LicitacoesController extends Controller
{
    public function sendRequest(Request $request)
    {
        $query1 = $request->input('query1');
        $query2 = $request->input('query2');
        $query3 = $request->input('query3');
        // Verifica se todos os parâmetros de pesquisa estão presentes
        
        // Cria um novo cliente Guzzle
        
        $client = new Client();

        // Define a URL para enviar a solicitação
        $url = 'https://api.portaldatransparencia.gov.br/api/v1/licitacoes';

        // Define os cabeçalhos personalizados
        $headers = [
            'Authorization' => 'Bearer 759ce6b0a35cfe3c1e83bd66b21eb9f2',
            'Accept'        => 'application/json',
        ];
        $queryParams = [
            'search1' => $query1,
            'search2' => $query2,
            'search3' => $query3,
        ];

        // Envia uma solicitação GET com os cabeçalhos personalizados
        $response = $client->request('GET', $url, [
            'headers' => $headers,'query'   => $queryParams,
        ]);

        // Obtém o corpo da resposta
        $body = $response->getBody()->getContents();

        // Decodifica a resposta JSON para um array
        $Licitacao = json_decode($body, true);

        // Passa os dados para a view e renderiza-a
        return view('Licitacao', compact('Licitacao'));
    }
}
