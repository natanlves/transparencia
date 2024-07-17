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
            'search4' => $query4,
        ];

        
        $response = $client->request('GET', $url, [
            'headers' => $headers,'query'   => $queryParams,
        ]);

        
        $body = $response->getBody()->getContents();

        
        $Licitacao = json_decode($body, true);

        
        return view('Licitacao', compact('Licitacao'));
        

    }
    
    
    public function processar(Request $request){

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
        
        return redirect()->route('resultado');
    }
    
    
    public function mostrar(){
        $q1=session('query1');
        $q2=session('query2');
        $q3=session('query3');
        $q4=session('query4');
        return view('LicitacaoRes',compact('q1','q2','q3','q4'));
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
 
             
             $data = json_decode($body, true);
 
            
             //return response()->json($data);
             return view('LicitacaoRes', compact('data'));
         } catch (\Exception $e) {
             
             return back()->withErrors(['message' => 'Erro ao obter as licitações.']);
         }
     
    }
}
//preciso ligar o botao de licitacao blade chamar de alguma forma a classe resultado e dps na classe mesmo eu redireciono a view LicitacaoRes
//dd($response->getStatusCode(), $response->getBody()->getContents()); use isso pra saber o retorno se é 200
