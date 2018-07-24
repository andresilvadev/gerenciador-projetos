<?php

require __DIR__.'/vendor/autoload.php';

$router = new ALS\Framework\Router;

$router->add('GET','/', function() {
    return 'Estamos na homepage';
});

$router->add('GET','/projects', function() {
    return 'Estamos listando os projetos' ;
});

$router->add('GET','/projects/(\d+)', function($params) {
    return 'Estamos listando o projeto de id: ' . $params[1];
});

try {
    echo $router->run();
} catch (\ALS\Framework\Exceptions\HttpException $e) {
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
        ]);
}
