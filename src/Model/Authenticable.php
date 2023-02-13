<?php

namespace MyBank\Model;

interface Authenticable
{
    public function authentication(string $password):bool;
}