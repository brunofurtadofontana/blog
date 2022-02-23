<?php

namespace App\Core;

class Controller{
    
    /**
     * Carrega uma página de template do twig a partir do diretório especificado
     *
     * @param  string $page
     * @param  array  $params
     * @return void imprime o HTML gerado pelo twig
     */
    protected function view(string $page, array $params = []){
        
        $page = str_replace('.','/',$page);

        $page .= '.twig.php';

        $loader = new \Twig\Loader\FilesystemLoader('../App/Site/View');

        $twig = new \Twig\Environment($loader);

        echo $twig->render($page, $params);
    }
}