<?php

namespace App\Site\Controller;

use App\Core\Controller;

class UsuarioController extends Controller{

    public function __construct(){
        // echo "Metodo construtor";
    }
    public function index(){
        echo "Metodo index";
    }
    public function teste(){
        echo "Metodo teste";
    }
    public function message(string $msg){
        echo $msg;
    }

    public function pagina(){

        $produtos = [
            'Banana',
            'Pera'
        ];
        
        $this->view('home.main',[
            'titulo' =>  'Página Inicial',
            'produtos' => $produtos
        ]);
    }
}