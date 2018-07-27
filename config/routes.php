<?php

use App\Models\Users;

$router->add('GET','/', function() use ($container) {
    //$pdo = $container['db'];
    //var_dump($pdo);

    return '<br> Estamos na homepage';
});

$router->add('GET','/users/(\d+)', function($params) use ($container) {
    $user = new Users($container);
    $data = $user->get($params[1]);

    return 'Meu nome é ' . $data['name'];
});

$router->add('GET','/projects', function() {
    return 'Estamos listando os projetos' ;
});

$router->add('GET','/projects/(\d+)', function($params) {
    return 'Estamos listando o projeto de id: ' . $params[1];
});