<?php

namespace MyBank\Service;

use MyBank\Model\Authenticable;
use MyBank\Model\Employees\Director;

class Authenticator
{
    public function login(Authenticable $authenticable, string $password) :void
    {
        if($authenticable->authentication($password)){
            echo "Login Successful!" . PHP_EOL;
        }else{
            echo "Login Failed. Wrong Password!" . PHP_EOL;
        }
    }
}