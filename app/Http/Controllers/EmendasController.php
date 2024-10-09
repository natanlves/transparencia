<?php

namespace App\Http\Controllers;
use App\Models\Historico; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;


class EmendasController extends Controller
{
    public function index(){
        return view("/emendas");
    }

    public function emendasP(){
        return view('EmendasP');
    }
    public function emendasParlamentaresR(Request $request){

        $query1 = $request->input('query1');
        $query2 = $request->input('query2');
        $query3 = $request->input('query3');
        $query4 = $request->input('query4');
        $query5 = $request->input('query5');
        $query6 = $request->input('query6');
        $query7 = $request->input('query7');
        $query8 = $request->input('query8');

        // Captura a URL da página
        $pageUrl = $request->fullUrl();

         // Armazena a pesquisa no banco de dados
         if ($query1 || $query2 || $query3 || $query4 || $query5 || $query6 || $query7 || $query8 && Auth::check()) {
            Historico::create([
                'usuario_id' => Auth::id(),
                'consulta' => json_encode($request->all()), // Armazena todas as queries em formato JSON
                'page_url' => $pageUrl,
            ]);
        }

        $client = new Client();

        $url = 'https://api.portaldatransparencia.gov.br/api-de-dados/emendas';

        $headers = [
            'chave-api-dados' => '759ce6b0a35cfe3c1e83bd66b21eb9f2',
            'Accept' => 'application/json',
        ];

        $queryParams = [
            'codigoEmenda' => $query1,
            'numeroEmenda' => $query2,
            'nomeAutor' => $query3,
            'tipoEmenda' => $query4,
            'ano' => $query5,
            'codigoFuncao' => $query6,
            'codigoSubfuncao' => $query7,
            'pagina' => $query8,
        ];
        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'query' => $queryParams,
        ]);
        
        
       $body = $response->getBody()->getContents();
       
       
       $data = json_decode($body, true);
        return view('EmendasPR',compact('data'));
    }
    public function emendasC(){
        return view('EmendasC');
    }
    public function emendasCodigoR(Request $request){
        
        $codigo = $request->input('query1');
        $query2 = $request->input('query2');

        // Captura a URL da página
        $pageUrl = $request->fullUrl();

         // Armazena a pesquisa no banco de dados
         if ($codigo || $query2 && Auth::check()) {
            Historico::create([
                'usuario_id' => Auth::id(),
                'consulta' => json_encode($request->all()), // Armazena todas as queries em formato JSON
                'page_url' => $pageUrl,
            ]);
        }
        
        
        $client = new Client();

        $url = "https://api.portaldatransparencia.gov.br/api-de-dados/emendas/documentos/{$codigo}";
        
        $headers = [
            'chave-api-dados' => '759ce6b0a35cfe3c1e83bd66b21eb9f2',
            'Accept' => 'application/json',
        ];

        $queryParams = [
            'codigo' => $codigo,
            'pagina' => $query2,
        ];
        $response = $client->request('GET', $url, [
            'headers' => $headers,
            'query' => $queryParams,
        ]);
        
        
       $body = $response->getBody()->getContents();
       
      
       $data = json_decode($body, true);
       
        return view('EmendasCR',compact('data'));

    }
}
