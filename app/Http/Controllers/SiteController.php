<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //Aqui podemos criar a lógica.
    public function index() {
        $nome = "Pedro";  
        $idade = 9;
        $nome2 = "Filipe";
        $idade2 = 20;
        $aniversaio = array(20, 12);
        $data = [
            'nome'=> $nome,
            'idade'=> $idade,
            'nome2'=>$nome2,
            'idade2'=> $idade2,
            'aniversario'=> $aniversaio[0],
            'aniversario2'=> $aniversaio[1]
        ];
        return view("bemvindo", $data);
    }

    public function sair() {
        return view("sair");
    }

    public function outrasaida() {
        $nome = "João";
        $data = ['nome'=>$nome];
        return view("outrasaida", $data);
    }

    public function teste() {
        return view("teste");
    }

    public function sobre() {
        return view("sobre");
    }

    public function users(Request $request) {
        $data = [
            'quantidadeusuario'=> $request->quantidade
        ];
        return view("usuarios", $data);
    }

    public function parametros(Request $request) {
        $data = [
            'valordohtml'=> $request->valor
        ];
        return view('parametroscomrequest', $data);
    }

    public function segundoparametro(Request $request){
        $data = [
            'valordourl'=> $request->passandovalor
        ] ;
        return view('segundovalorurl', $data);
    }

    public function ultimovalor(Request $request) {
        $data = ['ultimovalor'=>$request -> valor] ;
        return view('finalurl', $data);
    }

    public function bladerota() {
        $nome = "Blade";
        $html = "<b>Palavra em negrito<b/>";
        $data = [
            'blade'=>$nome,
            'html'=>$html
        ];
        return view('blade', $data);
    }

    public function condicionais(){
        $nome = 'Pedro';
        $data = ['nome'=>$nome];
        return view('condicionais', $data);
    }

    public function lacos() {
        return view('lacos');
    }
} 
