<?php

require __DIR__.'/vendor/autoload.php';

new ALS\Framework\Router;
new App\Module;

$route = $_SERVER['PATH_INFO'] ?? '/';
//var_dump($_SERVER['PATH_INFO'] ?? '/');
//var_dump($_SERVER);
//print_r($GLOBALS);

if ($route == '/') {
    echo 'Estamos na homepage';
} elseif ($route == '/projects') {
    echo 'Estamos listando projetos';
} else {
    echo 'Página não encontrada';
}