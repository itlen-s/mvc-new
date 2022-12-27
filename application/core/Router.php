<?php

namespace application\core;

class Router {

    protected $routes = [];
    protected $params = [];


    public function __construct() {
        // echo 'я роутер';
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
        // debug($arr);
    }
    
    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
        // echo '<br>';
        // var_dump($params);
        // echo '<p>'.$route.'<p>';
    }

    public function match() {
        // debug($_SERVER);
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            // var_dump($route);
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
                // debug($matches);
                // echo '123';
            }
        }

        return false;
        
    }

    public function run() {
        if ($this->match()) {
            // debug($this->params);
            $controller = 'application\controller\\'.ucfirst($this->params['controller']).'Controller.php';
            if (class_exists($controller)) {
                echo 'OK';
            } else {
                echo 'Не найден: '.$controller;
            }
            // echo $controller;
            // echo '<p>controller: <b>'.$this->params['controller'].'</b></P>';
            // echo '<p>controller: <b>'.$this->params['action'].'</b></P>';
            // echo 'Машрут найден';
        } else {
            echo 'Машрут не найден 404';
        }
        // echo 'start';
    }

}