<?php
use App\Http\Controllers\LicitacoesController;
use App\Http\Controllers\EmendasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/licitacao',[LicitacoesController::class,'index'])->name('licitacao');
Route::get('/licitacaoproc',[LicitacoesController::class,'sendRequest'])->name('request');
Route::get('/licitacaores',[LicitacoesController::class,'resultado'])->name('resultado');





Route::get('/emendas',[EmendasController::class,'index']);

Route::get('/passagem', function(){
    return view('passagemaerea');
}


);
