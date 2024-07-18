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
 
        //debuggar usando o return view
        
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
             
         
         /*dd($response->getStatusCode(), $response->getBody()->getContents());
         return view('LicitacaoRes');*/
         
    
}
}





/* public function processar(Request $request){

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
    */



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
//"[{"key":"chave-api-dados","value":"759ce6b0a35cfe3c1e83bd66b21eb9f2"}];