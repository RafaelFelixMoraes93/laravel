<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //Aqui podemos criar a lógica.
    public function index() {        
        return view("bemvindo");
    }

    public function sair() {
        return view("sair");
    }

    public function outrasaida() {
        return view("outrasaida");
    }

    public function teste() {
        return view("teste");
    }

    public function sobre() {
        return view("sobre");
    }
} 
