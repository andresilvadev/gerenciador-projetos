<?php

require __DIR__.'/vendor/autoload.php';

$router = new ALS\Framework\Router;

require __DIR__.'/config/routes.php';
require __DIR__.'/config/containers.php';

try {
    echo $router->run();
} catch (\ALS\Framework\Exceptions\HttpException $e) {
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
        ]);
}
