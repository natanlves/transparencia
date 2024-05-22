<?php
use App\Http\Controllers\LicitacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/licitacao',[LicitacoesController::class,'index']);
Route::get('/emendas',[EmendasController::class,'index']);


