<?php

require __DIR__.'/vendor/autoload.php';

$router = new ALS\Framework\Router;

$router->add('/', function() {
    return 'Estamos na homepage';
});

$router->add('/projects', function() {
    return 'Estamos listando os projetos' ;
});

$router->add('/projects/(\d+)', function($params) {
    return 'Estamos listando o projeto de id: ' . $params[1];
});

echo $router->run();