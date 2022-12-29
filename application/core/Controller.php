<?php

namespace application\core;

use application\core\Views;

abstract class Controller {

    public $route;
    public $view;

    public function __construct($route) {
        $this->route = $route;
        // var_dump($route);
        // echo '<p>hi<p>';
        // debug($this->route);
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
        // debug($this->model);
        // $this->before();
    }

    public function loadmodel($name) {
        $path = 'application\models\\'.ucfirst($name); //Проверяем  наличиекласс
        if (class_exists($path)){
            // debug('123');
            return new $path;
        }
        // debug($path);
    }

}