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
        $data = [
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2'
            ]
        ];

        return view('lacos', $data);
    }

    public function components() {
        $data = [
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha 2',
                'ovos 2'
            ]
        ];

        return view('components', $data);
    }

    public function exerciciocomponente() {
        $pessoas = [
            [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),  
                'nome' => 'Alessandro', 
                'birth' => '29/01/90', 
                'idade' => 29],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Bonieky', 
                'birth' => '10/11/1933', 
                'idade' => 90],
  
              [ 
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50), 
                'nome' => 'Maria', 
                'birth' => '01/01/2000', 
                'idade' => 25]
        ];

        $dados['pessoas'] = $pessoas;
    
        return view('exerciciocomponente', $dados);        
    }

    public function index2() {
        return view('index2');
    }

    public function index2include() {
        $nome = 'Pedro';
        $sobreNome = 'Felix';
        $data = [
            'nome'=> $nome,
            'sobreNome'=> $sobreNome
        ];
        return view('index2include', $data);
    }
} 
