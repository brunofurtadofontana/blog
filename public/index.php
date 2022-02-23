<?php

require_once('../vendor/autoload.php');


(new \App\Site\Controller\UsuarioController())->pagina();

(new \App\Core\Router());