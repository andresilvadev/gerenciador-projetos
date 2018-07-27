<?php

namespace App\Controllers;

use App\Models\Users;

class UsersController
{
    public function __construct($container) 
    {
        $this->container = $container;
    }

    public function show($id)
    {
        $user = new Users($this->container);
        $data = $user->get($id);
    
        return 'Meu nome é ' . $data['name'];
    }
}