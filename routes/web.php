<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, 'index']);

Route::get('/sair', [SiteController::class, 'sair']);

Route::get('/outrasaida', [SiteController::class,'outrasaida']);

Route::get('/teste', [SiteController::class,'teste']);

// Route::get('/', function () {
//     return 'Ainda estou no Router!';
//     //return view('bemvindo');
// });
