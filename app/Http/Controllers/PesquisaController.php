<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PesquisaController extends Controller{

    public function mostrarPesquisa()
    {

        return view('pesquisa');
    }
    


}