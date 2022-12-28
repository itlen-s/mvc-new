<?php

namespace application\core;

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
        // $this->before();
    }

}