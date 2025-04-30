<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, 'index']);

Route::get('/sair', [SiteController::class, 'sair']);

Route::get('/outrasaida', [SiteController::class,'outrasaida']);

Route::get('/teste', [SiteController::class,'teste']);

Route::get('/sobre', [SiteController::class,'sobre']);

Route::get('/usuarios/{quantidade}', [SiteController::class,'users']);

Route::get('/parametrourl/{valor}', [SiteController::class,'parametros']);

Route::get('parametro2/{passandovalor}', [SiteController::class,'segundoparametro']);

Route::get('ultimo/{valor}', [SiteController::class,'ultimovalor']);
// Route::get('/', function () {
//     return 'Ainda estou no Router!';
//     //return view('bemvindo');
// });

Route::get('blade', [SiteController::class,'bladerota']);

Route::get('condicionais', [SiteController::class,'condicionais']);

Route::get('/lacos', [SiteController::class,'lacos']);

Route::get('components', [SiteController::class,'components']);

Route::get('exercicioscomponent', [SiteController::class,'exerciciocomponente']);

Route::get('/include', [SiteController::class,'index2']);

Route::get('/include2', [SiteController::class,'index2include']);

Route::get('/componenteinclude', [SiteController::class,'indexcomponenteinclude']);