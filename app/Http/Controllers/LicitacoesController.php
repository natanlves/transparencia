<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LicitacoesController extends Controller
{
    public function index(){
        return view('Licitacao');
    }
    
    public function resultado(Request $request){
        

        
        $query1 = $request->input('query1');
        $query2 = $request->input('query2');
        $query3 = $request->input('query3');
        $query4 = $request->input('query4');
        
       
         $client = new Client();
         
         
         $url = 'https://api.portaldatransparencia.gov.br/api-de-dados/licitacoes';
 
        
         $headers = [
             'chave-api-dados' => '759ce6b0a35cfe3c1e83bd66b21eb9f2',
             'Accept' => 'application/json',
         ];
 
        
        $queryParams = [
             'dataInicial' => $query1,
             'dataFinal' => $query2,
             'codigoOrgao' => $query3,
             'pagina' => $query4,
         ];
         
        
         
             
             $response = $client->request('GET', $url, [
                 'headers' => $headers,
                 'query' => $queryParams,
             ]);
             
             
            $body = $response->getBody()->getContents();
            
            
            $data = json_decode($body, true);
            
            return view('LicitacaoRes',compact('data'));
}
}

