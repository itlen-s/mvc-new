<?php

require 'application/lib/Dev.php';

use application\core\Router;
// use application\lib\Db;
// require 'application/core/Router.php';

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class.'.php');
    // echo $path;
    if (file_exists($path)) { 
        require $path;
    }
    // echo '<p>'.$class.'<p>';
    // include 'classes/' .$class . '.class.php';
});

session_start();

$router = new Router;
$router ->run();
// $route = new Db;
// debug($test);

// echo 'Привет';