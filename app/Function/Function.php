<?php

/**
 * Utilizamos para debuggar as instrições passadas por parametros
 *
 * @param  mixed $param
 * @return void
 */
function dd($param = null){
    echo "<pre>";
    print_r($param);
    echo "</pre>";
    die();
    
}

function redirect(string $url){
    header('Location: '.  $url);
}