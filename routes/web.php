<?php
use App\Http\Controllers\LicitacoesController;
use App\Http\Controllers\EmendasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historicoController;
use App\Http\Controllers\AuthController;



Route::get('/', [AuthController::class, 'showHome'])->name('home');
Route::get('/login', [AuthController::class, 'showHome'])->name('home');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
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






