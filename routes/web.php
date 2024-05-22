<?php
use App\Http\Controllers\LicitacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/licitacao',[LicitacoesController::class,'index']);


