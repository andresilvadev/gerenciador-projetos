<?php

require __DIR__.'/vendor/autoload.php';

$router = new ALS\Framework\Router;

require __DIR__.'/config/containers.php';
require __DIR__.'/config/routes.php';


try {
    $result = $router->run();

    $response = new ALS\Framework\Response;
    $params = [
        'container' => $container,
        'params'    => $result['params']
    ];
    
    $response($result['action'], $params);

} catch (\ALS\Framework\Exceptions\HttpException $e) {
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
        ]);
}
