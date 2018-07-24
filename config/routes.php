<?php

$router->add('GET','/', function() use ($container) {
    $pdo = $container['db'];
    //var_dump($pdo);

    return 'Estamos na homepage';
});

$router->add('GET','/projects', function() {
    return 'Estamos listando os projetos' ;
});

$router->add('GET','/projects/(\d+)', function($params) {
    return 'Estamos listando o projeto de id: ' . $params[1];
});