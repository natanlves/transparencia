<?php

namespace App\Http\Controllers;
use App\Models\Historico;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;


class LicitacoesController extends Controller
{
    public function index(Request $request){
         // Captura a query e a URL da página
         $query = $request->getQueryString();
         $pageUrl = $request->fullUrl();
 
         // Armazena a pesquisa no banco de dados
         if ($query && Auth::check()) {
             Historico::create([
                 'usuario_id' => Auth::id(),
                 'consulta' => $query,
                 'page_url' => $pageUrl,
             ]);
         }
        return view('Licitacao');
    }
    
    public function resultado(Request $request){
        

        
        $query1 = $request->input('query1');
        $query2 = $request->input('query2');
        $query3 = $request->input('query3');
        $query4 = $request->input('query4');
        
       

// Captura a URL da página
$pageUrl = $request->fullUrl();

// Armazena a pesquisa no banco de dados
if ($query1 || $query2 || $query3 || $query4 && Auth::check()) {
    Historico::create([
        'usuario_id' => Auth::id(),
        'consulta' => json_encode($request->all()), // Armazena todas as queries em formato JSON
        'page_url' => $pageUrl,
    ]);
}











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

