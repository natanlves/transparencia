<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LicitacoesController extends Controller
{
    public function index(){
        return view('Licitacao');
    }
   
   
   
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
        
        return redirect()->route('resultado');
    
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
    
    
    
    
    
    public function resultado(Request $request){
         
        
        $query1 = session('query1');
        $query2 = session('query2');
        $query3 = session('query3');
        $query4 = session('query4');
         
         $client = new Client();
 
         
         $url = 'https://api.portaldatransparencia.gov.br/api-de-dados/licitacoes?';
 
        //verufucar a URL da API
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
            
            
            
            dd($response->getStatusCode(), $response->getBody()->getContents());
            
            if(empty($data)){
                echo "Nenhum dado encontrado.";
            }
            else{
                $licitacao = $data['licitacao'];
                $numero = $licitacao['numero'];
                $objeto = $licitacao['objeto'];
                $numeroProcesso = $licitacao['numeroProcesso'];
                $contatoResponsavel = $licitacao['contatoResponsavel'];
                return view('LicitacaoRes', compact('numero','objeto','numeroProcesso','contatoResponsavel'));
            }
            
             
         } catch (\Exception $e) {
             
             return back()->withErrors(['message' => 'Erro ao obter as licitações.']);
         }
         /*dd($response->getStatusCode(), $response->getBody()->getContents());
         return view('LicitacaoRes');*/
         
    }
}










//preciso ligar o botao de licitacao blade chamar de alguma forma a classe resultado e dps na classe mesmo eu redireciono a view LicitacaoRes
//dd($response->getStatusCode(), $response->getBody()->getContents()); use isso pra saber o retorno se é 200
//return response()->json($data);
/*public function mostrar(){
    $q1=session('query1');
    $q2=session('query2');
    $q3=session('query3');
    $q4=session('query4');
    return view('LicitacaoRes',compact('q1','q2','q3','q4'));
}*/