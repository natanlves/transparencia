<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;


class LicitacoesController extends Controller
{   
  
    public function sendRequest()
{
    // Create a new Guzzle client
    $client = new Client();

    // Define the URL you want to send the request to
    $url = 'https://api.portaldatransparencia.gov.br';

    // Define the custom headers
    $headers = [
        'Authorization' => 'Bearer 759ce6b0a35cfe3c1e83bd66b21eb9f2',
        'Accept'        => 'application/json',
    ];

    // Send a GET request with custom headers
    $response = $client->request('GET', $url, [
        'headers' => $headers,
    ]);

    // Get the status code of the response
    $statusCode = $response->getStatusCode();

    // Get the response body
    $body = $response->getBody()->getContents();

    // Return or process the response
    return response()->json([
        'status_code' => $statusCode,
        'body'        => json_decode($body, true),
    ]);


    
    
    
    return view('Licitacao');
  }
}
