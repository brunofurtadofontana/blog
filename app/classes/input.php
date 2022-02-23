<?php

namespace App\Classes;

/**
 * Gerencia os tipos de entradas GET e POST 
 */
class Input{


            
    /**
     * Faz uma requisição do tipo GET
     *
     * @param  string $param nome da variavel ou da query
     * @param  int $filter Constante com filtro para variavel
     * @return string Return false senão encontrar ou o conteúdo encontrado
     */

    public static function get(string $param, int $filter = FILTER_SANITIZE_STRING): string {
        return filter_input(INPUT_GET, $param, $filter);

    }    

    /**
     * Faz uma requisição do tipo POST
     *
     * @param  string $param nome da variavel ou da query
     * @param  int $filter Constante com filtro para variavel
     * @return string Return false senão encontrar ou o conteúdo encontrado
     */
    public static function post(string $param, int $filter = FILTER_SANITIZE_STRING): string {
        return filter_input(INPUT_POST, $param, $filter);

    }
}