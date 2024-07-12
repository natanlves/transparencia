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
        $query4 = $request->input('query4');
        
        session([
            'query1' => $query1,
            'query2' => $query2,
            'query3' => $query3,
            'query4' => $query4,
        ]);
        
        
        $client = new Client();

        
        $url = 'https://api.portaldatransparencia.gov.br/api/v1/licitacoes';

       
        $headers = [
            'Authorization' => '759ce6b0a35cfe3c1e83bd66b21eb9f2',
            'Accept'        => 'application/json',
        ];
        $queryParams = [
            'search1' => $query1,
            'search2' => $query2,
            'search3' => $query3,
        ];

        
        $response = $client->request('GET', $url, [
            'headers' => $headers,'query'   => $queryParams,
        ]);

        
        $body = $response->getBody()->getContents();

        
        $Licitacao = json_decode($body, true);

        
        return view('Licitacao', compact('Licitacao'));
        

    }
    public function resultado(Request $request){
         
        
        $query1 = session('query1');
        $query2 = session('query2');
        $query3 = session('query3');
        $query4 = session('query4');
         
         $client = new Client();
 
         
         $url = 'https://api.portaldatransparencia.gov.br/api-de-dados/licitacoes';
 
        
         $headers = [
             'Authorization' => '759ce6b0a35cfe3c1e83bd66b21eb9f2',
             'Accept' => 'application/json',
         ];
 
        
         $queryParams = [
             'query1' => $query1,
             'query2' => $query2,
             'query3' => $query3,
             'query4' => $query4,
         ];
 
         try {
             
             $response = $client->request('GET', $url, [
                 'headers' => $headers,
                 'query' => $queryParams,
             ]);
 
             
             $body = $response->getBody()->getContents();
 
             
             $Licitacao = json_decode($body, true);
 
             
             return view('LicitacaoRes', compact('LicitacaoRes'));
         } catch (\Exception $e) {
             
             return back()->withErrors(['message' => 'Erro ao obter as licitações.']);
         }
     
    }
}
//preciso ligar o botao de licitacao blade chamar de alguma forma a classe resultado e dps na classe mesmo eu redireciono a view LicitacaoRes