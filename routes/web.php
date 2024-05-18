<?php
use app\Http\Controllers\LicitacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Licitacao',[LicitacoesController::class,'index']);


