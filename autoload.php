<?php

spl_autoload_register(function(string $fullClassName){
    $path = str_replace('MyBank', 'src', $fullClassName);
    $path .= '.php';

    if(file_exists($path)){
        require_once $path;
    }

});