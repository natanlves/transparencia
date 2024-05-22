<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EmendasController extends Controller
{
    public function index(){
        header(ENV('CHAVE'));
    
        Http::get("https://api.portaldatransparencia.gov.br/swagger-ui/index.html#/Licitações%20do%20Poder%20Executivo%20Federal/licitacoes");
    
        return view("/emendas");
    }
}
