<?php
use App\Http\Controllers\LicitacoesController;
use App\Http\Controllers\EmendasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historicoController;

Route::get('/', function () {
    return view('home');
});
//licitacao
Route::get('/licitacao',[LicitacoesController::class,'index'])->name('licitacao');
Route::get('/licitacaores',[LicitacoesController::class,'resultado'])->name('resultado');

//emendas
Route::get('/emendas',[EmendasController::class,'index']);
Route::get('/emendasParlamentares',[EmendasController::class,'emendasP'])->name('emendasP');
Route::get('/emendasParlamentaresResultados',[EmendasController::class,'emendasParlamentaresR'])->name('emendasParR');
Route::get('/emendasCodigo',[EmendasController::class,'emendasC'])->name('emendasC');
Route::get('/emendasCodigoResultados',[EmendasController::class,'emendasCodigoR'])->name('emendasCodR');

//historico



Route::get('/search-history', [historicoController::class, 'mostrarHistorico'])->middleware('auth');






