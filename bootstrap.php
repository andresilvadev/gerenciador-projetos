<?php

require __DIR__.'/vendor/autoload.php';

$router = new ALS\Framework\Router;

$router->add('/', function() {
    return 'Estamos na homepage';
});

$router->add('/projects', function() {
    return 'Estamos listando projetos';
});

echo $router->run();